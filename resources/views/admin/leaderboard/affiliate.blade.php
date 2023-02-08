@extends('admin.admin_master')
@section('admin')
<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Leaderboard Affiliate</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active">Affiliate</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <h4 class="card-title">Leaderboard Affiliate Data</h4>

                        <form action="">
                            <div class="row mb-3">
                                <label for="day" class="col-sm-12 col-md-6 col-lg-2 col-form-label">Show Last Day</label>
                                <div class="col-sm-12 col-md-6 col-lg-2">
                                    <input name="day" class="form-control" type="text" value="{{ request()->day }}" id="day">
                                    @error('day')
                                        <span class="text-danger"> {{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <!-- end row -->
                            <button type="submit" hidden>Show</button>
                        </form>

                        {!! $chart1->renderHtml() !!}

                    </div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->
    </div>
</div>
@endsection

@section('javascript')
{!! $chart1->renderChartJsLibrary() !!}
{!! $chart1->renderJs() !!}
@endsection
