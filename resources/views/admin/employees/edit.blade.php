@extends('admin.layouts.master')
@section('customstyle')
@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Update Employee</h3>
                    </div>
                    <form id="quickForm" action="{{route('employeesUpdate',$employees->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="employee_id">Employee Id </label>
                                        <input type="text" name="employee_id" class="form-control"value="{{$employees->employee_id}}" require>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name"> Name</label>
                                        <input type="text" name="name" class="form-control" value="{{$employees->name}}" require>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="job_profile">Job Profile </label>
                                        <input type="text" name="job_profile" class="form-control" value="{{$employees->job_profile}}" require>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="total_exp">Total Experience </label>
                                        <input type="text" name="total_exp" class="form-control"  value="{{$employees->total_exp}}" require>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="photo">Photo</label>
                                        <input type="file" name="photo" class="form-control" value="{{$employees->employee_id}}" require>
                                        <img src="/uploads/employees/{{$employees->photo}}" alt="{{$employees->photo}}" width="30%" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="joining_date">Joining Date </label>
                                        <input type="date" name="joining_date" class="form-control" value="{{$employees->joining_date}}" require>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="salary">Salary</label>
                                        <input type="text" name="salary" class="form-control" value="{{$employees->salary}}" require>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="description">Description</label>
                                        <textarea id="summernote"name="description">{{$employees->description}} </textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="don">Date Of Birth </label>
                                        <input type="date" name="dob" class="form-control" value="{{$employees->dob}}"require>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="status">Status</label>
                                        <select class="form-control" require id="status" name="status" aria-label=".form-select-sm example">
                                            <option selected>Select Status</option>
                                            <option value="1" @if($employees->status == 1) selected="selected"@endif>Active</option>
                                            <option value="0" @if($employees->status == 0) selected="selected"@endif>InActive</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div>
                            </div>

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                    </form>

                </div>

            </div>
        </div>
</section>
@endsection
@section('customscript')
<script>
    $(function () {
        // Summernote
        $('#summernote').summernote()

        // CodeMirror
        CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
            mode: "htmlmixed",
            theme: "monokai"
        });
    })

</script>
@endsection
