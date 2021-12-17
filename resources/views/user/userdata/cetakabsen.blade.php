<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>ABsen</title>
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
    <link rel="icon" href="{{ asset('atlantis/assets/img/icon.ico') }}" type="image/x-icon" />


    <script src="https://code.highcharts.com/highcharts.js"></script>
    <!-- Fonts and icons -->
    <script src="{{ asset('atlantis/assets/js/plugin/webfont/webfont.min.js') }}"></script>




    <!-- CSS Files -->
    <link rel="stylesheet" href="{{ asset('atlantis/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('atlantis/assets/css/atlantis.min.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link rel="stylesheet" href="../assets/css/demo.css">
    <title></title>
</head>

<body onload="window.print();">
    <div class="content">
        <div class="page-inner">
            <div class="page-header">

            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">{{ $title }}</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="basic-datatables" class="display table  table-hover">
                                    <thead>
                                        <tr>
                                            <th class="col-md-2 border">No</th>
                                            <th class="col-md-3 border">photo</th>


                                            <th class="col-md-3 border">nama</th>
                                            <th class="col-md-4 border">tanda tangan</th>

                                        </tr>
                                    </thead>
                                    <tfoot>
                                        @foreach ($formulir as $form)

                                            <tbody>
                                                <tr>
                                                    <td class="col-md-2 border">{{ $i++ }}</td>
                                                    <td>
                                                        <img src="{{ $form->photo }}" alt=""
                                                            style="max-width: 100px !important; border-radius:5px;">

                                                    </td>
                                                    <td>{{ $form->full_name }}</td>
                                                    <td class="col-md-4 border ">


                                                    </td>


                                                </tr>
                                            </tbody>

                                        @endforeach
                                </table>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
