<div>
    @if ($disease)
    <div>
        <h3 class="font-bold">DEFINITION</h3>
        <p class="text-small">{{$disease->definition}}</p>
    </div>
    <div>
        <h3 class="font-bold">SYMPTOMS</h3>
        @foreach ($symptoms as $symptom)
            <p class="text-small">{{$symptom->symptom}}</p>
        @endforeach
    </div>
    <div>
        <h3 class="font-bold">TREATMENTS</h3>
        @foreach ($treatments as $treatment)
            <p class="text-small">{{$treatment->name}}</p>
        @endforeach
    </div>
    @else
    <p>Click one of the disease to display the detail.</p>
    @endif
</div>