@extends('template')

@section('title', 'Plate Uploader')

@section('content')
<div class="row my-2">
    <div class="col-12">
        <h3>Plate Uploader</h3>
        <hr />
    </div>
</div>
<div clas="row">
    <blockquote class="col-12 blockquote border rounded">
        <p class="text-warning">
            * Note this interface only renders your plate(s) but does not import them into the database
        </p>
    </blockquote>
</div>
<div class="row mt-4 mb-2">
    <div class="col-12">
        <h5>Metadata</h5>
        <hr />
    </div>
</div>
<div class="row">
    <form class="col-12">
        <div class="row form-group">
            <label class="col-12 col-md-4" for="email-input">Uploader Email</label>
            <input type="email" id="email-input" class="form-control col-12 col-md-8" />"
        </div>
        <div class="row form-group">
            <label class="col-12 col-md-4" for="type-input">Plate Type</label>
            <select id="type-input" class="custom-select col-12 col-md-8">
                <option value="Pre-screen">Pre-screen</option>
                <option value="Single Mutant">Single Mutant</option>
            </select>
        </div>
        <div class="row form-group">
            <label class="col-12 col-md-4" for="nw-input">Number of Wells</label>
            <select id="nw-input" class="custom-select col-12 col-md-8">
                <option value="24">24</option>
                <option value="48">48</option>
                <option value="96">96</option>
                <option value="384">384</option>
            </select> 
        </div>
        <div class="row form-group">
            <label class="col-12 col-md-4" for="nw-input">Instrument</label>
            <select id="instrument-input" class="custom-select col-12 col-md-8">
            </select> 
        </div>
    </form>
</div>
<script>
    $(document).ready(() => {
        // Add options for the instrument select
        let instruments = [ "Tecan Safire 1", "Spectramax 1", "Beckman 1", "Beckman 2", "Tecan Sunrise 1",
        "Tecan Sunrise 2", "Tecan Infinite M1000-1", "Tecan Infinite F200-1", "Tecan Infinite F200-2", "Bioscreen C",
        "Bioscreen Test", "F-200-JBEI_1", "" ]
    });
</script>
@endsection