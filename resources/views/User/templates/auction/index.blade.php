@extends('User.layouts.index')

@section('content')

@include('User.partials.header.cartnavbar')

@include('User.partials.header.heronav')

<section class="account-section padding-bottom">
    <div class="container">
        <div class="account-wrapper mt--100 mt-lg--440">
            <div class="left-side w-100">
                <div class="section-header">
                    <h2 class="title">Bonjour</h2>
                    <p>Remplir tous les information necessaire svp</p>
                </div>


                <form method="POST" action="{{ route('login') }}" class="login-form">
                    @csrf
                    <div class="row">
                        <div class="form-group col-md-6">
                            <select class="form-control"  id="category">
                              <option>choose category</option>
                              <option>2</option>
                              <option>3</option>
                              <option>4</option>
                              <option>5</option>
                            </select>
                          </div>
                          <div class="form-group col-md-6">
                            <select class="form-control" name="id_category" id="subcategory">
                              <option>choose subcategory</option>
                              <option>2</option>
                              <option>3</option>
                              <option>4</option>
                              <option>5</option>
                            </select>
                          </div>
                    </div>
                    <div class="row ">
                        <div class="form-group col-md-6">
                            <label for="title"><i class="far fa-envelope"></i></label>
                            <input type="text" required value="{{ old('title') }}" name="title" id="title"
                                placeholder="Title offert">

                        </div>
                        <div class="form-group col-md-6">
                            <label for="prix_deb"><i class="fas fa-dollar-sign"></i></label>
                            <input type="text" required id="prix_deb" value="{{ old('prix_deb') }}" name="prix_deb" placeholder="Prix depart">
                        </div>
                    </div>
                    <div class="row">

                        <div class="form-group col-md-12">
                            <textarea class="form-control" name="description" placeholder="description" id="description" rows="4"></textarea>
                        </div>

                    </div>
                    <!--Custom details-->
                    <div class="row ">
                        <div class="form-group col-md-6">
                            <label for="title">Label</label>
                            <input type="text" required value="" name="label[0][]" id="title"
                                placeholder="Title offert">

                        </div>
                        <div class="form-group col-md-6">
                            <label for="prix_deb">Value</label>
                            <input type="text" required id="prix_deb"  name="value[0][]" placeholder="Prix depart">
                        </div>
                    </div>
                    <!--Custom details-->
                   <div class="row">
                       <div class="col-md-12">
                            <button type="button" data-type="text" class="btn-add-field">Add new field</button>
                       </div>
                   </div>


                    <div class="form-group mb-0">
                        <button type="submit" class="custom-button">Enregistrer</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</section>


@endsection
