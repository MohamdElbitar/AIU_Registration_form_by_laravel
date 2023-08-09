@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Student Data Form</h2>
    <form action="{{ route('student-data.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <!-- Full Name in Arabic -->
        <div class="form-group">
            <label for="full_name_arabic">Full Name in Arabic:</label>
            <input type="text" class="form-control" id="full_name_arabic" name="full_name_arabic">
        </div>

        <!-- Full Name in English -->
        <div class="form-group">
            <label for="full_name_english">Full Name in English:</label>
            <input type="text" class="form-control" id="full_name_english" name="full_name_english">
        </div>

        <!-- Gender -->
        <div class="form-group">
            <label for="gender">Gender:</label>
            <select class="form-control" id="gender" name="gender">
                <option value="male">Male</option>
                <option value="female">Female</option>
            </select>
        </div>

        <!-- Birth Date -->
        <div class="form-group">
            <label for="birth_date">Birth Date:</label>
            <input type="date" class="form-control" id="birth_date" name="birth_date">
        </div>

        <!-- Birth Country -->
        <div class="form-group">
            <label for="birth_country">Birth Country:</label>
            <input type="text" class="form-control" id="birth_country" name="birth_country">
        </div>

        <!-- Birth City -->
        <div class="form-group">
            <label for="birth_city">Birth City:</label>
            <input type="text" class="form-control" id="birth_city" name="birth_city">
        </div>

        <!-- Mobile Number -->
        <div class="form-group">
            <label for="mobile_number">Mobile Number:</label>
            <input type="text" class="form-control" id="mobile_number" name="mobile_number">
        </div>

        <!-- Email -->
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" name="email">
        </div>

        <!-- National ID Number -->
        <div class="form-group">
            <label for="national_id_number">National ID Number:</label>
            <input type="text" class="form-control" id="national_id_number" name="national_id_number">
        </div>

        <!-- Upload a copy of your National ID/Passport -->
        <div class="form-group">
            <label for="national_id_passport_copy">Upload a copy of your National ID/Passport:</label>
            <input type="file" class="form-control-file" id="national_id_passport_copy" name="national_id_passport_copy" accept=".pdf,.jpg,.png">
        </div>

        <!-- Residential Region/City -->
        <div class="form-group">
            <label for="residential_region_city">Residential Region/City:</label>
            <input type="text" class="form-control" id="residential_region_city" name="residential_region_city">
        </div>

        <!-- Residential Address -->
        <div class="form-group">
            <label for="residential_address">Residential Address:</label>
            <input type="text" class="form-control" id="residential_address" name="residential_address">
        </div>

        <!-- Guardian's Name in Arabic -->
        <div class="form-group">
            <label for="guardian_name_arabic">Guardian's Name in Arabic:</label>
            <input type="text" class="form-control" id="guardian_name_arabic" name="guardian_name_arabic">
        </div>

        <!-- Guardian's National ID -->
        <div class="form-group">
            <label for="guardian_national_id">Guardian's National ID:</label>
            <input type="text" class="form-control" id="guardian_national_id" name="guardian_national_id">
        </div>

        <!-- Guardian's Mobile Number -->
        <div class="form-group">
            <label for="guardian_mobile_number">Guardian's Mobile Number:</label>
            <input type="text" class="form-control" id="guardian_mobile_number" name="guardian_mobile_number">
        </div>

        <!-- Guardian's Email -->
        <div class="form-group">
            <label for="guardian_email">Guardian's Email:</label>
            <input type="email" class="form-control" id="guardian_email" name="guardian_email">
        </div>

        <!-- Certificate Issue Country -->
        <div class="form-group">
            <label for="certificate_issue_country">Certificate Issue Country:</label>
            <input type="text" class="form-control" id="certificate_issue_country" name="certificate_issue_country">
        </div>

        <!-- Certificate Issue City/Region -->
        <div class="form-group">
            <label for="certificate_issue_city_region">Certificate Issue City/Region:</label>
            <input type="text" class="form-control" id="certificate_issue_city_region" name="certificate_issue_city_region">
        </div>

        <!-- School Name -->
        <div class="form-group">
            <label for="school_name">School Name:</label>
            <input type="text" class="form-control" id="school_name" name="school_name">
        </div>

        <!-- Seating Number(Thanwya Amma) -->
        <div class="form-group">
            <label for="seating_number">Seating Number(Thanwya Amma):</label>
            <input type="text" class="form-control" id="seating_number" name="seating_number">
        </div>

        <!-- School Graduation Year -->
        <div class="form-group">
            <label for="school_graduation_year">School Graduation Year:</label>
            <input type="text" class="form-control" id="school_graduation_year" name="school_graduation_year">
        </div>

        <!-- Certificate Type -->
        <div class="form-group">
            <label for="certificate_type">Certificate Type:</label>
            <input type="text" class="form-control" id="certificate_type" name="certificate_type">
        </div>

        <!-- Total Score -->
        <div class="form-group">
            <label for="total_score">Total Score:</label>
            <input type="text" class="form-control" id="total_score" name="total_score">
        </div>

        <!-- Percentage -->
        <div class="form-group">
            <label for="percentage">Percentage:</label>
            <input type="text" class="form-control" id="percentage" name="percentage">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection
