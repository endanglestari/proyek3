@extends('template.base')

@section('content')

 <div class="container">
        <div class="row mt-5 mr-2">
            <div class="col-md-12">
                <div class="row">
                    <div class="mt-5 col-md-4">
                        <img src="{{url('public')}}/assets/images/faces/image_6.jpg" width="300px" height="300px" alt="" class="img-responsive">
                    </div>
                    <div class=" mt-5 col-md-8">
                        <h1>Vegetables And Fruits</h1>
                        <table class="table">
                            <thead>
                                <th width="20%"></th>
                                <th></th>
                            </thead>
                            <tbody>
                                <tr>
                                    <th>Nama Website </th>
                                    <td>vegefoods</td>
                                </tr>
                                <tr>
                                    <th>Alamat RM. </th>
                                    <td>Jl.Blalala</td>
                                </tr>
                                <tr>
                                    <th>No. Telp</th>
                                    <td>089*********</td>
                                </tr>
                                <tr>
                                    <th>Email</th>
                                    <td>vegefoods@gmail.com</td>
                                </tr>
                                <tr>
                                    <th>Mitra Kerja Sama</th>
                                    <td>Gojek <br>
                                    Bang Antar</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>      
@endsection