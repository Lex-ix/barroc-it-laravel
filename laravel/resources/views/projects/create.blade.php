@extends('master')
@section('content')

    <div class="container">
        <h2 class="subhead">Create project</h2>
        <section>
            <form action="{{ action('projectsController@store') }}" method="POST">
                {{ csrf_field() }}

                <input type="hidden" name="company_id" id="company_id" value="{{ $id }}">

                <div class="form-group">
                    <label for="name">Project name:*</label>
                    <input type="text" id="name" name="name" placeholder="Enter your project name here.">
                </div>
                <div class="form-group">
                    <label for="application_desc">Application description:*</label>
                    <textarea name="application_desc" id="application_desc" cols="30" rows="10" required></textarea>
                </div>
                <div class="form-group">
                    <label for="maintenance">Maintenance:*</label>
                    <select name="maintenance" id="maintenance">
                        <option value="0">No</option>
                        <option value="1">Yes</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="operating_system">Operating system:*</label>
                    <input type="text" name="operating_system" id="operating_system" required>
                </div>
                <div class="form-group">
                    <label for="hardware_desc">Hardware description:*</label>
                    <textarea name="hardware_desc" id="hardware_desc" cols="30" rows="10"></textarea>
                </div>

                <div class="form-group">
                    <input type="submit" value="Create">
                </div>
            </form>
        </section>
    </div>

@endsection