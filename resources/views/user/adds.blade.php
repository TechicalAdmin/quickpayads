@extends('dashboard')
@section('style')
    .disabled {
        color: red;
        cursor: not-allowed;
        opacity: 0.5;
        text-decoration: none;
        pointer-events: none;
        background-image: url(public/assets/images/checked.png)
    }
@endsection
@section('right_panel')
    <div class="row">
    @foreach($adds as $add)
        <div class="col-md-4 col-sm-3 col-xs-2">
            <a target="_blank" id="{{$add->id}}" class="{{in_array($add->id, $clicked_ads) ? 'disabled' : ''}}" href="{{$add->link}}" onclick="onAdClick({{$add->id}})">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h3 class="card-title text-center text-success">{{$add->title}}</h3>
                        <P> Members Visit : 19878
                            <br> Outside Visit : 19878
                            <br>Total Visit : 19878</P>
                        {{--<a target="_blank" href="Https://thetradefx.com" class="btn btn-primary">Cick Add</a>--}}
                    </div>
                </div>
            </a>
        </div>

        @endforeach
    </div>
@endsection

@section('scripts')
    <script type="text/javascript">
        document.oncontextmenu = disableRightClick;

        function disableRightClick(event)
        {
            event = event || window.event;

            if (event.preventDefault)
            {
                event.preventDefault();
            }
            else
            {
                event.returnValue = false
            }
        }
    </script>
<script>

    function onAdClick(id) {
        axios.post("{{route('ad.click')}}", {
            ad_id: id
        }).then(function(response) {
            jQuery("#"+id).addClass('disabled');
            console.log(response);
        }).catch(function (error) {
            console.log(error);
        });
    }

</script>
@endsection