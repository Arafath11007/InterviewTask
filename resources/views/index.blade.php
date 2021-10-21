<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>{{ env('APP_NAME') }}</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <div class="container-fluid">
        <h1 style="text-align: center">Products</h1>
        <div class="col-md-4">
            <div class="panel-group" id="accordion">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">Filter</h4>
                    </div>
                    <div id="filter1" class="filter panel-collapse collapse in">
                        <div class="panel-body">
                            <form id="filterForm">
                                Rules

                                @foreach ($rules->all() as $key => $rule)
                                <div class="col-md-12" style="margin-bottom: 10px;">
                                    <label for="{{ $key }}">{{ $key }}</label>
                                    <input type="checkbox" name="rules[]" id="{{ $key }}" value="{{ $key }}">
                                    <ul>
                                        @foreach ($rule as $keyRule => $valueRule)
                                        <li>{{ $keyRule }}</li>
                                        <li>
                                            <ul>
                                                <li>{{ $valueRule['text'] }}</li>
                                            </ul>
                                        </li>
                                        @endforeach
                                    </ul>
                                </div>
                                @endforeach

                                <div class="col-md-12">
                                    <p></p>
                                    <button type="reset" class="btn btn-danger">Reset</button>
                                    <button type="submit" class="btn btn-success">Filter</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="col-md-12" id="products">
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script type="text/javascript">
        $('#filterForm').on('submit', function (e) {
                $.ajax({
                    url : "{{ route('product_with_filter') }}",
                    type: "get",
                    dataType: 'html',
                    data: $(this).serialize(),
                    success: function(data){
                        $('#products').html(data);
                    },
                    error: function(data){

                    }
                });
                return false;
            })
    </script>
</body>

</html>