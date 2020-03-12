@extends('layouts.adminapp')

@section('content')
    <!-- Material form register -->
    <div class="card m-2">

        <h5 class="card-header info-color white-text text-center py-4">
            <strong>Search</strong>
        </h5>

        <!--Card content-->
        <div class="card-body px-lg-5 pt-0">

            <!-- Form -->
            <form action="{{ route('search') }}" method="post" class="text-center" style="color: #757575;" >
            @csrf
                <div class="form-row">
                    <div class="col">
                        <!-- First name -->
                        <div class="md-form">
                            <span>Subject</span>
                            <select name="tyresize" class="mdb-select browser-default custom-select mb-4">
                                @foreach($tyresizes as $tyresize)
                                    <option value="{{ $tyresize->id }}"> {{ $tyresize->tyresize }} </option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="col">
                        <!-- Last name -->
                        <div class="md-form">
                        <span>Aspect Ratio</span>
                            <select name="aspectratio" class="mdb-select browser-default custom-select mb-4">
                                @foreach($aspectratios as $aspectratio)
                                    <option value="{{ $aspectratio->id }}"> {{ $aspectratio->aspectratio }} </option>
                                @endforeach
                            </select>
                        </div>
                    </div>


                    <div class="col">
                        <!-- Last name -->
                        <div class="md-form">
                            <span>Subject</span>
                                <select name="rimsize" class="mdb-select browser-default custom-select mb-4">
                                    @foreach($rimsizes as $rimsize)
                                        <option value="{{ $rimsize->id }}"> {{ $rimsize->rimsize }} </option>
                                    @endforeach
                                </select>
                        </div>
                    </div>
                </div>

                <!-- Sign up button -->
                <div class="container text-center">
                    <button class="btn btn-outline-info btn-rounded my-2" type="submit">Search</button>
                </div>


            </form>
            <!-- Form -->

        </div>

    </div>
    <!-- Material form register -->
@endsection