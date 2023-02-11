@extends('user.user_master')
@section('user')
<div class="page-content">
    <div class="container-fluid">
        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">My Affiliate</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="{{ route('user.dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active">My Affiliate</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!-- end page title -->

            <div class="row mb-3">
                <label for="affiliate" class="col-md-2 col-sm-12 col-form-label">Affiilate Link</label>
                <div class="col-md-6 col-sm-8 mb-1">
                    <input name="affiliate" class="form-control" type="text" value="{{ route('register.affiliate', Auth::user()->username) }}" id="affiliate" readonly>
                </div>
                <div class="col-md-2 col-sm-4">
                    <button class="btn btn-primary" value="copy" onclick="copyToClipboard()">Copy!</button>
                </div>
            </div>
            <!-- end row -->

        {{-- Start Table Category --}}
        <div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                            <h4 class="card-title">My Affiliate</h4>

                            <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Username</th>
                                        <th>Since</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @php
                                     $i = 1;
                                    @endphp
                                    @foreach ($users as $user)
                                        @php
                                            $affiliate = \App\Models\User::find($user->affiliate_id);
                                        @endphp
                                        <tr>
                                            <td>{{ $i++ }}</td>
                                            <td>{{ $user->username }}</td>
                                            <td>{{ \Carbon\Carbon::parse($user->created_at)->diffForHumans() }}</td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>

                        </div>
                    </div>
                </div> <!-- end col -->
            </div> <!-- end row -->
        </div>
        {{-- End Table Category --}}

    </div>
</div>

<script>
    function copyToClipboard() {
        document.getElementById('affiliate').select();
        document.execCommand('copy');
    }
</script>
@endsection
