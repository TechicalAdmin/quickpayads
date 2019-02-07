@extends('edit_dashboard')
@section('right_panel')
    <div class="row">
        <a target="_blank" class="col-md-4 col-lg-4 col-xs-7 col-sm-5" href="Https://thetradefx.com" onclick="clickAndDisable(this);">
            <div >
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h3 class="card-title text-center text-success">The Trade Fx</h3>
                        <P> Members Visit : 19878
                            <br> Outside Visit : 19878
                            <br>Total Visit : 19878</P>
                        {{--<a target="_blank" href="Https://thetradefx.com" class="btn btn-primary">Cick Add</a>--}}
                    </div>
                </div>
            </div>
        </a>
        <a target="_blank" class="col-md-4 col-lg-4 col-xs-7 col-sm-5" href="https://shopse.pk/" >
            <div >
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h3 class="card-title text-center text-success">Shopse.pk</h3>
                        <P> Members Visit : 1354
                            <br> Outside Visit : 8456
                            <br>Total Visit : 2210</P>
                        {{--<a target="_blank" href="Https://thetradefx.com" class="btn btn-primary">Cick Add</a>--}}
                    </div>
                </div>
            </div>
        </a>
        <a target="_blank" class="col-md-4 col-lg-4 col-xs-7 col-sm-5" href="https://codesappers.com/" >
            <div >
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h3 class="card-title text-center text-success">Codesappers.com</h3>
                        <P> Members Visit : 1354
                            <br> Outside Visit : 8456
                            <br>Total Visit : 2210</P>
                        {{--<a target="_blank" href="Https://thetradefx.com" class="btn btn-primary">Cick Add</a>--}}
                    </div>
                </div>
            </div>
        </a>
    </div>

@endsection