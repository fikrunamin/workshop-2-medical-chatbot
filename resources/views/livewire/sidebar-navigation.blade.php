<div class="flex flex-row h-full">
    <nav class="bg-gray-900 w-full justify-between flex flex-col">
        <div class="mt-10 mb-10">
            <a href="javascript:;">
                {{-- Put logo here --}}
              </a>
              <div class="mt-10">
                <ul>
                  <li class="mb-6 flex justify-center">
                    <a href="javascript:;" wire:click="switch_page('search')">
                      <span class="material-icons h-5 w-5 text-gray-300 hover:text-blue-500">
                        search
                      </span>
                    </a>
                  </li>
                  <li class="mb-6 flex justify-center">
                    <a href="javascript:;" wire:click="switch_page('clinic')">
                        <span class="material-icons h-5 w-5 text-gray-300 hover:text-red-500">
                            local_hospital
                        </span>
                    </a>
                  </li>
                </ul>
              </div>
        </div>
        <div class="mb-4 flex justify-center">
          <a href="javascript:;" wire:click="switch_page('clinic')">
              <span class="material-icons h-5 w-5 text-gray-300 hover:text-red-500">
                  perm_identity
              </span>
          </a>
        </div>
    </nav>
</div>

@push('script-header')
<link rel="stylesheet" type="text/css"
    href="https://js.api.here.com/v3/3.1/mapsjs-ui.css" />
@endpush

@push('scripts')
<script type="module" src="https://js.api.here.com/v3/3.1/mapsjs.bundle.js"></script>
<script>
    const API_KEY = "rtXBXS1sI6FJJUMMU9vBwxKnGDJNKfE0CRyiZA1f_WQ"
    const REST_API_KEY = "rtXBXS1sI6FJJUMMU9vBwxKnGDJNKfE0CRyiZA1f_WQ"

    function getLocation() {
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(find_clinic);
        } else { 
            alert("Geolocation is not supported by this browser.");
        }
    }

    function find_clinic(position){
        let url = `https://discover.search.hereapi.com/v1/discover?at=${position.coords.latitude},${position.coords.longitude}&limit=10&lang=en&q=dental&apiKey=${REST_API_KEY}`

        var xhttp = new XMLHttpRequest()
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                let data = JSON.parse(this.responseText).items

                window.data = data
                window.position = position

                Livewire.emit('get_list_clinic', data)
            }
        };
        xhttp.open("GET", url, true)
        xhttp.send()
    }

    function renderMap(latitude, longitude) {
      document.getElementById('mapContainer').innerHTML = ''

      var platform = new H.service.Platform({
          'apikey': API_KEY
      });

      var defaultLayers = platform.createDefaultLayers()

      var map = new H.Map(
          document.getElementById('mapContainer'),
          defaultLayers.vector.normal.map,
          {
            zoom: 10,
            center: { lat: latitude, lng: longitude }
          });

      var ui = H.ui.UI.createDefault(map, defaultLayers)

      let group = new H.map.Group();
      map.addObject(group);

      var routingParameters = {
        'routingMode': 'fast',
        'transportMode': 'car',
        'origin': `${window.position.coords.latitude},${window.position.coords.longitude}`,
        'destination': `${latitude},${longitude}`,
        'return': 'polyline'
      };

      var onResult = function(result) {
        if (result.routes.length) {
          result.routes[0].sections.forEach((section) => {
              let linestring = H.geo.LineString.fromFlexiblePolyline(section.polyline);

              let routeLine = new H.map.Polyline(linestring, {
                style: { strokeColor: 'blue', lineWidth: 3 }
              });

              let svg_marker_start = `<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="black" width="48px" height="48px"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 2c-4.97 0-9 4.03-9 9 0 4.17 2.84 7.67 6.69 8.69L12 22l2.31-2.31C18.16 18.67 21 15.17 21 11c0-4.97-4.03-9-9-9zm0 2c1.66 0 3 1.34 3 3s-1.34 3-3 3-3-1.34-3-3 1.34-3 3-3zm0 14.3c-2.5 0-4.71-1.28-6-3.22.03-1.99 4-3.08 6-3.08 1.99 0 5.97 1.09 6 3.08-1.29 1.94-3.5 3.22-6 3.22z"/></svg>`

              let svg_marker_end = `<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="black" width="48px" height="48px"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/></svg>`
              
              svg_marker_start = new H.map.Icon(svg_marker_start)
              svg_marker_end = new H.map.Icon(svg_marker_end)

              // Create a marker for the start point:
              let startMarker = new H.map.Marker(section.departure.place.location, {icon:svg_marker_start});

              // Create a marker for the end point:
              let endMarker = new H.map.Marker(section.arrival.place.location, {icon:svg_marker_end});

              // Add the route polyline and the two markers to the map:
              map.addObjects([routeLine, startMarker, endMarker]);

              // Set the map's viewport to make the whole route visible:
              map.getViewModel().setLookAtData({bounds: routeLine.getBoundingBox()});
          });
        }
      };

      var router = platform.getRoutingService(null, 8);

      router.calculateRoute(routingParameters, onResult,
        function(error) {
          alert(error.message);
        });
    }

    document.addEventListener('livewire:load', function () {
        let page = @this.page

        if (page == 'clinic')
          getLocation()

        Livewire.on('get_clinic', page => {
          getLocation()
        })
        
        Livewire.on('show_location_detail', location => {
          renderMap(location.position.lat, location.position.lng)
        })

    })


</script>
@endpush