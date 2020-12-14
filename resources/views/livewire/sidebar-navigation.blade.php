<div class="flex flex-row h-screen max-h-screen @if (session('chatbot_visibility') == true || session('secondary_menu_visibility') == true) hidden @else block @endif sm:block">
    <nav class="bg-blue-600 w-full justify-between flex flex-col px-5 h-screen max-h-screen">
        <div class="mt-10 mb-10">
          <div class="flex items-center justify-center w-full ">
            <a href="javascript:;" wire:click="switch_page('search')" class="text-blue-500 shadow-lg bg-white rounded-full h-12 w-12 sm:h-14 sm:w-14  flex items-center justify-center duration-200">
              <svg id="Capa_1" class="h-8 w-8 text-blue-500" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg" fill="#1c64f2">
                <g><g><path d="m297.645 125.406c-.001 0-.002.001-.002.001-44.137 23.448-60.977 78.444-37.538 122.595 16.272 30.631 47.732 48.114 80.222 48.114 14.327 0 28.858-3.401 42.37-10.575 44.137-23.448 60.977-78.443 37.538-122.595-23.447-44.137-78.439-60.977-122.59-37.54zm78.017 146.889c-11.279 5.988-23.401 8.826-35.36 8.826-27.113-.001-53.372-14.592-66.95-40.152-19.561-36.847-5.508-82.745 31.328-102.314 36.847-19.559 82.741-5.506 102.309 31.328 19.56 36.846 5.506 82.744-31.327 102.312z"/><path d="m376.785 182.391h-13.56v-13.561c0-9.088-7.393-16.481-16.481-16.481h-13.149c-9.087 0-16.48 7.393-16.48 16.481v13.561h-13.561c-9.103 0-16.509 7.406-16.509 16.509v13.12c0 9.103 7.406 16.509 16.509 16.509h13.561v13.561c0 9.103 7.393 16.509 16.48 16.509h13.149c9.088 0 16.481-7.406 16.481-16.509v-13.56h13.56c9.104 0 16.51-7.406 16.51-16.509v-13.12c-.001-9.104-7.406-16.51-16.51-16.51zm1.51 29.63c0 .819-.691 1.51-1.511 1.51h-21.059c-4.142 0-7.5 3.358-7.5 7.5v21.061c0 .805-.692 1.51-1.482 1.51h-13.149c-.803 0-1.481-.691-1.481-1.51v-21.061c0-4.142-3.357-7.5-7.5-7.5h-21.06c-.818 0-1.51-.691-1.51-1.51v-13.12c0-.819.691-1.51 1.51-1.51h21.06c4.142 0 7.5-3.358 7.5-7.5v-21.061c0-.803.679-1.482 1.481-1.482h13.149c.79 0 1.482.692 1.482 1.482v21.061c0 4.142 3.357 7.5 7.5 7.5h21.059c.819 0 1.511.691 1.511 1.51z"/><path d="m506.585 420.006-24.796-46.633c-.013-.026-.023-.052-.036-.078-.014-.025-.03-.048-.044-.073l-13.539-25.463c-1.896-3.603-5.093-6.253-9.001-7.461-3.92-1.211-8.068-.826-11.687 1.092l-5.631 2.994-22.904-43.133c14.072-11.53 25.396-26.023 33.306-42.791 11.09-23.51 14.564-50.454 9.779-75.87-.766-4.071-4.686-6.748-8.757-5.983-4.07.766-6.749 4.687-5.982 8.757 8.864 47.093-13.643 93.852-56.006 116.353-17.982 9.553-37.814 13.798-57.637 12.571-.332-.053-.669-.092-1.015-.099-.057-.001-.112-.002-.168-.002-.072 0-.142.009-.214.011-8.05-.603-16.091-2.108-23.999-4.531-27.834-8.53-50.678-27.388-64.326-53.104-13.655-25.693-16.479-55.173-7.951-83.009 8.527-27.832 27.376-50.676 53.077-64.323 25.71-13.658 55.2-16.486 83.033-7.962 27.834 8.523 50.679 27.376 64.322 53.086 1.942 3.657 6.481 5.049 10.14 3.109 3.659-1.942 5.05-6.482 3.109-10.141-15.523-29.25-41.512-50.699-73.18-60.396-.16-.049-.32-.092-.48-.141-9.781-26.211-29.133-45.28-56.202-55.275-28.25-10.432-63.189-10.097-101.019.965-7.135 2.065-12.416 4.018-16.659 5.587-4.908 1.815-8.151 3.014-10.593 3.014-2.42 0-5.652-1.196-10.544-3.006-4.247-1.571-9.532-3.527-16.661-5.59-36.533-10.681-70.503-11.36-98.239-1.959-3.923 1.329-6.025 5.587-4.696 9.51 1.33 3.923 5.587 6.024 9.51 4.696 24.804-8.406 55.655-7.662 89.236 2.156 6.625 1.918 11.627 3.768 15.646 5.256 6.178 2.286 10.642 3.938 15.749 3.938 5.127 0 9.602-1.655 15.796-3.946 4.016-1.485 9.014-3.333 15.646-5.253 62.652-18.319 113.851-4.2 134.831 35.854-25.897-3.774-52.233.743-75.781 13.252-29.238 15.525-50.682 41.513-60.382 73.176-9.702 31.669-6.489 65.209 9.045 94.437 15.524 29.252 41.512 50.706 73.177 60.41 6.905 2.116 13.899 3.598 20.918 4.492-.68 20.316-2.729 46.656-10.202 66.386-8.163 21.55-20.799 31.587-39.766 31.587-19.774 0-32.893-9.736-41.286-30.64-8.005-19.938-10.555-46.66-13.02-72.502-.631-6.611-1.283-13.448-2.013-19.941-1.633-14.455-4.544-25.053-8.898-32.401-5.774-9.743-13.011-11.788-18.066-11.788-5.047 0-12.273 2.046-18.043 11.791-4.351 7.35-7.26 17.947-8.893 32.402-.729 6.49-1.382 13.327-2.013 19.939-2.465 25.842-5.015 52.563-13.02 72.501-8.393 20.904-21.511 30.64-41.285 30.64-21.974 0-35.762-13.689-43.392-43.08-6.995-26.948-6.995-61.426-6.995-89.129 0-38.977-12.539-67.126-23.602-91.961-6.795-15.253-13.212-29.66-16.294-45.228-8.307-42.115.94-76.777 26.036-97.601 3.188-2.645 3.628-7.373.983-10.56-2.644-3.187-7.374-3.627-10.56-.983-29.523 24.494-40.594 64.287-31.174 112.049 3.411 17.226 10.162 32.38 17.308 48.424 10.965 24.617 22.304 50.071 22.304 85.858 0 28.557 0 64.097 7.477 92.898 9.355 36.037 28.839 54.31 57.91 54.31 25.961 0 44.534-13.475 55.204-40.05 8.812-21.947 11.466-49.764 14.032-76.666.653-6.851 1.271-13.323 1.986-19.683 2.759-24.421 9.076-30.874 12.031-30.874 3.183 0 9.306 6.503 12.059 30.87.716 6.364 1.333 12.835 1.987 19.686 2.566 26.902 5.22 54.72 14.032 76.666 10.67 26.576 29.244 40.051 55.205 40.051 25.321 0 43.419-13.886 53.793-41.273 8.134-21.475 10.392-48.187 11.151-70.701.195.001.39.011.585.011 11.841-.001 23.619-1.731 35.03-5.135l22.922 43.167-5.625 2.991c-.01.005-.02.011-.029.016-7.437 3.996-10.248 13.276-6.283 20.657l13.565 25.521c.013.024.022.049.034.073.009.017.021.032.031.049l24.801 46.659c5.787 10.892 15.508 18.887 27.37 22.511 4.5 1.374 9.095 2.056 13.662 2.056 7.468 0 14.858-1.823 21.618-5.414 22.55-11.981 31.142-40.087 19.152-62.653zm-52.073-65.366c.065-.034.142-.037.229-.011.113.035.144.092.17.143l10.075 18.947-55.307 29.414-10.098-18.997c-.011-.021-.037-.07-.006-.174.04-.129.119-.179.153-.197zm-64.926-35.47c2.948-1.287 5.866-2.68 8.737-4.205 2.858-1.518 5.638-3.141 8.344-4.855l21.939 41.315-17.072 9.076zm90.809 150.244c-7.358 3.91-15.832 4.712-23.859 2.259-8.029-2.452-14.602-7.852-18.508-15.205l-21.311-40.092 55.309-29.415 21.314 40.084c8.108 15.261 2.302 34.268-12.945 42.369z"/></g></g>
              </svg>
              </a>
          </div>
              <div class="mt-20">
                <ul>
                  <li class="mb-6 flex justify-center">
                    <a href="javascript:;" class="
                      @if (session('page') == 'search')
                      text-blue-500 shadow-lg bg-white rounded-full h-12 w-12 sm:h-14 sm:w-14  flex items-center justify-center duration-200
                      @else
                      text-white hover:text-blue-500 hover:shadow-lg hover:bg-white rounded-full h-12 w-12 sm:h-14 sm:w-14  flex items-center justify-center duration-200
                      @endif
                      " wire:click="switch_page('search')">
                      <span class="material-icons">
                        search
                      </span>
                    </a>
                  </li>
                  
                  <hr class="mb-6 border-2 rounded-xl border-white">

                  <li class="mb-6 flex justify-center">
                    <a href="javascript:;" class="
                    @if (session('page') == 'clinic')
                    text-blue-500 shadow-lg bg-white rounded-full h-12 w-12 sm:h-14 sm:w-14  flex items-center justify-center duration-200
                    @else
                    text-white hover:text-blue-500 hover:shadow-lg hover:bg-white rounded-full h-12 w-12 sm:h-14 sm:w-14  flex items-center justify-center duration-200
                    @endif" wire:click="switch_page('clinic')">
                        <span class="material-icons">
                            local_hospital
                        </span>
                    </a>
                  </li>
                </ul>
              </div>
        </div>
        <div class="mb-4 flex justify-center">
          <a href="javascript:;" class="
          @if (session('page') == 'profile')
          text-blue-500 shadow-lg bg-white rounded-full h-12 w-12 sm:h-14 sm:w-14  flex items-center justify-center duration-200
          @else
          text-white hover:text-blue-500 hover:shadow-lg hover:bg-white rounded-full h-12 w-12 sm:h-14 sm:w-14  flex items-center justify-center duration-200
          @endif" wire:click="switch_page('profile')">
              <span class="material-icons">
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
      let el = document.getElementById('mapContainer')
      el.innerHTML = ''
      

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
        
        Livewire.on('show_location_detail', (location) => {
          let el = document.getElementById('mapContainer')

          if(el != null){
            renderMap(location.position.lat, location.position.lng)
          }
        })

        Livewire.on('update_scroll', () => {
          var element = document.getElementById("chatbot");
          element.scrollTop = element.scrollHeight;
        })

    })


</script>
@endpush