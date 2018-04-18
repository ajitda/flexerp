@extends('layouts.app')
@section('content')
    {!! Html::script('js/angular.min.js', array('type' => 'text/javascript')) !!}
    {!! Html::script('js/main.js', array('type' => 'text/javascript')) !!}
    <div class="container" ng-app="automateApp">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h1>Course Enrolement Form<a href="{{route('enrolements.index')}}" class="btn btn-primary pull-right"><i class="fa fa-list"></i>&nbsp; List </a></h1>
            </div>
            <div class="panel-body" ng-controller="automateController">
                <div class="row">

                </div>
            </div>
        </div>

    </div>

@endsection

@section('scripts')
    <script>
        $(document).ready(function(){
            $(document).on('change', '#course', function(){
//                console.log('hmm it change');

                var cat_id = $(this).val();
                //console.log(cat_id);
                // var div=$(this).parent().parent();

                $.ajax({
                    type: 'get',
                    url: '{!! URL::to('getcourse') !!}',
                    data: {'id':cat_id},
                    success:function (data) {
                        //console.log('success');

                        //console.log(data);

                        $('input[name=price]').val(data[0].fees);

                    },
                    error:function () {

                    }
                });
            });
        });
    </script>
@endsection