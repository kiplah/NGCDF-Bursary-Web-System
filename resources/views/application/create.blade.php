@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="mb-4">NGCDF Bursary Application Form</h2>

    <form action="{{ route('application.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <!-- Personal Info -->
        <div class="mb-3">
            <label for="full_name" class="form-label">Full Name</label>
            <input type="text" name="full_name" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="gender" class="form-label">Gender</label>
            <select name="gender" class="form-control" required>
                <option value="">-- Select Gender --</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="phone" class="form-label">Phone Number</label>
            <input type="text" name="phone" class="form-control">
        </div>

        <div class="mb-3">
            <label for="institution_name" class="form-label">Institution Name</label>
            <input type="text" name="institution_name" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="institution_code" class="form-label">Institution Code</label>
            <input type="text" name="institution_code" class="form-control">
        </div>

        <div class="mb-3">
            <label for="mode_of_study" class="form-label">Mode of Study</label>
            <select name="mode_of_study" class="form-control">
                <option value="">-- Select Mode --</option>
                <option value="Regular">Regular</option>
                <option value="Parallel">Parallel</option>
                <option value="Boarding">Boarding</option>
                <option value="Day">Day</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="family_status" class="form-label">Family Status</label>
            <select name="family_status" class="form-control">
                <option value="">-- Select Status --</option>
                <option value="Total Orphan">Total Orphan</option>
                <option value="Partial Orphan">Partial Orphan</option>
                <option value="Single Parent">Single Parent</option>
                <option value="Both Parents Alive">Both Parents Alive</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="why_bursary" class="form-label">Why are you applying for a bursary?</label>
            <textarea name="why_bursary" class="form-control" rows="3"></textarea>
        </div>

        <div class="mb-3">
            <label for="disability" class="form-label">Do you have any physical impairment?</label>
            <select name="disability" class="form-control">
                <option value="0">No</option>
                <option value="1">Yes</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="disability_description" class="form-label">If yes, describe</label>
            <textarea name="disability_description" class="form-control" rows="2"></textarea>
        </div>

        <div class="mb-3">
            <label for="amount_requested" class="form-label">Amount Requested (Ksh)</label>
            <input type="number" name="amount_requested" class="form-control">
        </div>
        <div class="mb-3">
            <label>ID / Birth Certificate</label>
            <input type="file" name="id_copy" class="form-control">
        </div>

        <div class="mb-3">
            <label>Transcript / Report</label>
            <input type="file" name="transcript" class="form-control">
        </div>

        <div class="mb-3">
            <label>Admission Letter</label>
            <input type="file" name="admission_letter" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Submit Application</button>
    </form>

</div>
@endsection