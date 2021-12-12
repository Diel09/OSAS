<form action="{{route('certificate-of-scholarship.store')}}" class="p-3" method="POST">
    @csrf
    <div class="d-flex justify-content-center">
        <p><em>Please select your type of student:</em></p>
        <div class="form-check form-check-inline mx-2">
            <input class="form-check-input" type="radio" name="studentType" id="graduate" value="graduate" wire:click="showGrad">
            <label class="form-check-label" for="graduate">Graduate</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="studentType" id="undergraduate" value="undergraduate" wire:click="showUnder">
            <label class="form-check-label" for="inlineRadio2">Undergraduate</label>
        </div>
    </div>
    <!-- Graduate -->
    @if($showGraduate == true)
    <div class="row  d-flex justify-content-center">
        <!-- main form -->
        <div class="col-md-6 p-3 border border-warning">
            <h4 class="fw-bold text-center mb-4">Certificate of Scholarship for Graduate Students</h4>
            <div class="row">
                <!-- Name -->
                <label for="nameGrad" class="col-md-1 form-label text-center">Name: </label>
                <div class="col">
                    <input type="text" class="form-control form-control-sm" id="nameGrad" name="nameGrad">
                </div>
            </div>
            <div class="row mt-3">
                <!-- college -->
                <label for="collegeGrad" class="col-md-1 form-label text-center">College: </label>
                <div class="col">
                    <select class="form-select form-select-sm" name="collegeGrad" id="collegeGrad">
                        <option selected>Agaramid tu Database then isunto pagalaan</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
                <!-- Course -->
                <label for="courseGrad" class="col-md-1 form-label text-center">Course: </label>
                <div class="col">
                    <select class="form-select form-select-sm" name="courseGrad" id="courseGrad">
                        <option selected>Agaramid tu Database then isunto pagalaan</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
            </div>

            <div class="row mt-3">
                <!-- Year -->
                <label for="academicyearGrad" class="col-md-2 form-label text-center">School Year: </label>
                <div class="col-md-3">
                    <input type="text" class="form-control form-control-sm" id="academicyearGrad" name="academicyearGrad" placeholder="ex: 2019-2020">
                </div>
                <!-- Purpose -->
                <label for="purposeGrad" class="col-md-1 form-label text-center">Purpose: </label>
                <div class="col-md-1"></div>
                <div class="col">
                    <input type="text" class="form-control form-control-sm" id="purposeGrad" name="purposeGrad">
                </div>
            </div>
            <div class="row mt-3">
                <label for="programGrad" class="col-md-4 form-label text-center">Scholarship Program: </label>
                <div class="col">
                    <input type="text" class="form-control form-control-sm" id="programGrad" name="programGrad">
                </div>
            </div>
            <!-- Scholarship Program -->
        </div>
    </div>
    @endif

    <!-- underGraduate -->
    @if($showUnder == true)
    <div class="row d-flex justify-content-center">
        <!-- main form -->
        <div class="col-md-6 p-3 border border-warning">
            <h4 class="fw-bold text-center mb-4">Certificate of Scholarship for Undergraduate Students</h4>
            <div class="row">
                <!-- Name -->
                <label for="name" class="col-md-1 form-label text-center">Name: </label>
                <div class="col">
                    <input type="text" class="form-control form-control-sm" id="name" name="name">
                </div>
            </div>
            <div class="row mt-3">
                <!-- college -->
                <label for="college" class="col-md-1 form-label text-center">College: </label>
                <div class="col">
                    <select class="form-select form-select-sm" aria-label="course" name="college" id="college">
                        <option selected>Agaramid tu Database then isunto pagalaan</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
                <!-- Course -->
                <label for="course" class="col-md-1 form-label text-center">Course: </label>
                <div class="col">
                    <select class="form-select form-select-sm" aria-label="course" name="course" id="course">
                        <option selected>Agaramid tu Database then isunto pagalaan</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
            </div>

            <div class="row mt-3">
                <!-- Year -->
                <label for="academicyear" class="col-md-2 form-label text-center">School Year: </label>
                <div class="col-md-3">
                    <input type="text" class="form-control form-control-sm" id="academicyear" name="academicyear" placeholder="ex: 2019-2020">
                </div>
                <!-- Purpose -->
                <label for="purpose" class="col-md-1 form-label text-center">Purpose: </label>
                <div class="col-md-1"></div>
                <div class="col">
                    <input type="text" class="form-control form-control-sm" id="purpose" name="purpose">
                </div>
            </div>
            <div class="row mt-3">
                <label for="program" class="col-md-4 form-label text-center">Scholarship Program: </label>
                <div class="col">
                    <input type="text" class="form-control form-control-sm" id="program" name="program">
                </div>
            </div>
            <!-- Scholarship Program -->
        </div>
    </div>
    @endif

    <div class="row mt-3 d-flex justify-content-end">
        <button type="submit" class="btn btn-warning col-1">Submit</button>
    </div>

</form>