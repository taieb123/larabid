@extends('User.layouts.index')

@section('content')

@include('User.partials.header.cartnavbar')

@include('User.partials.header.heronav')

<section class="account-section padding-bottom">
    <div class="container">
        <div class="account-wrapper mt--100 mt-lg--440">
            <div class="left-side w-100">
                <div class="section-header">
                    <h2 class="title">Upload picture Form</h2>
                    <div class="alert alert-success" role="alert">
                        You're information was succesfully saved just need to upload picture
                      </div>
                </div>


                <form action="{{route('offert.fileupload')}}" class='dropzone' >
                        <input type="text" hidden="true" id="csrf_token" value="{{ csrf_token() }}">
                        <input type="text" hidden="true" id="id_offert" value="{{$offert_id}}">

                </form>

                <div class="form-group mb-0 display-none">
                    <button type="button" class="custom-button" style="float: right;margin-top: 20px;">Save</button>
                </div>
            </div>

        </div>
    </div>
    <!-- Script -->
    <script src="{{ asset('User/js/dropzone.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    <script>
        var CSRF_TOKEN = document.getElementById('csrf_token').value;
        var id_offert = document.getElementById('id_offert').value;

        Dropzone.autoDiscover = false;
        var myDropzone = new Dropzone(".dropzone",{
            maxFilesize: 3,  // 3 mb
            acceptedFiles: ".jpeg,.jpg,.png,.pdf",
        });
        myDropzone.on("sending", function(file, xhr, formData) {
           formData.append("_token", CSRF_TOKEN);
           formData.append("id_offert", id_offert);
           formData.append("field_name", 'image');
           formData.append("table_name", 'offert');
        });
        myDropzone.on("success", function(file,response) {
            console.log(response);
            Swal.fire({
                position: 'top-end',
                icon: 'success',
                title: 'Your picture was successfully loaded',
                showConfirmButton: false,
                timer: 1500
            })
        });
    </script>
</section>
@endsection
