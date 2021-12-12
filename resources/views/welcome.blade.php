@extends('layouts.app')

@section('content')
<div class="container-lg rounded-3 border shadow p-5">
    <p class="fw-bold fs-5">OSAS FORMS</p>
    <div class="row d-flex">
        <a href="" type="button" class="btn btn-warning text-black col m-1">Certificate of Good Moral Character</a>
        <a href="" type="button" class="btn btn-warning text-black col m-1">Parent's Consent/Waiver</a>
        <a href="" type="button" class="btn btn-warning text-black col m-1">Student Center Reservation</a>
        <a href="" type="button" class="btn btn-warning text-black col m-1">Group Insurance</a>
    </div>
</div>

<div class="container-lg rounded-3 border shadow p-5 d-grid mt-3 gap-2">
    <p class="fw-bold fs-5">ISPS FORMS</p>
    <div class="row">
        <a href="{{route('certificate-of-scholarship')}}" type="button" class="btn btn-warning text-black col mx-1">Certificate of Scholarship</a>
        <a href="" type="button" class="btn btn-warning text-black col mx-1">Certificate of Non-Scholarship</a>
        <a href="" type="button" class="btn btn-warning text-black col mx-1">Application for Assistantship</a>
    </div>
    <div class="row">
        <a href="" type="button" class="btn btn-warning text-black col mx-1">Application for Scholarship</a>
        <a href="" type="button" class="btn btn-warning text-black col mx-1">Application for Free Higher Education</a>
        <a href="" type="button" class="btn btn-warning text-black col mx-1">Application for Tertiary Education Subsidy</a>
    </div>
    <div class="row">
        <div class="col-4"></div>
        <a href="" type="button" class="btn btn-warning text-black col-4">Application for Dorm Occupancy</a>
    </div>
</div>
@endsection