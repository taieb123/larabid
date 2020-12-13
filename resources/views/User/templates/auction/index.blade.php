@extends('User.layouts.index')

@section('content')

@include('User.partials.header.cartnavbar')

@include('User.partials.header.heronav')

<section class="account-section padding-bottom">
    <div class="container">
        <div class="account-wrapper mt--100 mt-lg--440">
            <div class="left-side w-100">
                <div class="section-header">
                    <h2 class="title">Hello There</h2>
                </div>


                <form method="POST" action="{{ route('offer.store') }}" enctype="multipart/form-data" class="login-form">
                    @csrf

                    <div class="row ">
                        <div class="form-group col-md-6">
                            <label for="title"><i class="far fa-envelope"></i></label>
                            <input type="text" required value="{{ old('title') }}" name="title" id="title"
                                placeholder="Title offert">

                        </div>
                        <div class="form-group col-md-6">
                            <label for="prix_deb"><i class="fas fa-dollar-sign"></i></label>
                            <input type="number" required id="prix_deb" value="{{ old('prix_deb') }}" name="prix_deb" placeholder="Prix depart">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-12">
                            <textarea class="form-control" name="description" placeholder="description" id="description" rows="4"></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-12">
                            <select class="form-control"  id="category" onchange="ChargeCategory()">
                              <option>choose category</option>
                              @foreach ($categories as $item)
                                <option value="{{ $item->id }}">{{ $item->title }}</option>
                              @endforeach
                            </select>
                          </div>
                    </div>
                    <div class="row ">
                        <div class="form-group col-md-6">
                            <p style="text-align: left;margin-bottom:5px;margin-top:20px;">Start date</p>
                            <input type="date" style="padding:0 20px;" required value="{{ old('start_date') }}" name="start_date" id="start_date">

                        </div>
                        <div class="form-group col-md-6">
                            <p style="text-align: left;margin-bottom:5px;margin-top:20px;">End date</p>
                            <input type="date" style="padding:0 20px;" required id="end_date" value="{{ old('end_date') }}" name="end_date">
                        </div>
                    </div>

                    <p style="text-align: left;margin-bottom:5px;margin-top:20px;">characteristic</p>
                    <!--Custom details-->
                    <div class="row  custom_zone">
                        <div class="form-group col-md-6">
                            <label >Title</label>
                            <input type="text" required value="" name="label[0][]" placeholder="Label">

                        </div>
                        <div class="form-group col-md-6">
                            <label>Value</label>
                            <input type="text" required  name="value[0][]" placeholder="Value">
                        </div>
                    </div>
                    <!--Custom details-->
                   <div class="row btn_to_add_field">
                       <div class="col-md-12">
                            <button type="button" data-type="text" class="btn-add-field">Ajouter caracterestique</button>
                       </div>
                   </div>


                    <div class="form-group mb-0">
                        <button type="submit" class="custom-button">Save & process to upload file</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</section>


@endsection
