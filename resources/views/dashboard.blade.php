@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
		<div class="col-6">
            <div class="card">
                <div class="card-header d-flex justify-content-between">Assigned Referrals <span class="badge bg-primary rounded-pill d-flex align-items-center">14</span></div>
                <div class="card-body p-0">
					<ul class="list-group list-group-flush">
						<li class="list-group-item">Document One</li>
						<li class="list-group-item">Document Two</li>
						<li class="list-group-item">Document Three</li>
						<li class="list-group-item">Document Four</li>
					</ul>
                </div>
            </div>
        </div>
        <div class="col-6">
            <div class="card">
                <div class="card-header">Recently Viewed Referrals</div>
                <div class="card-body p-0">
					<ul class="list-group list-group-flush">
						<li class="list-group-item d-flex justify-content-between">
							Document One
							<div class="d-flex flex-column">
								<small class="text-muted">06/09/2023</small>
							</div>
						</li>
						<li class="list-group-item">Document Two</li>
						<li class="list-group-item">Document Three</li>
						<li class="list-group-item">Document Four</li>
					</ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
