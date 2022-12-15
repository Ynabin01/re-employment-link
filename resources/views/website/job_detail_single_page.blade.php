@extends('layouts.master')

@section('content')
<!--== Start Page Header Area ==-->

<div class="breadcrumb-area">
    <div class="container">
        <ol class="default-breadcrumb">
            <li class="crumb">
              <div class="link"><a href="/" class="fa fa-home"></a></div>
            </li>
            <li class="crumb active">
                <div class="link"><span aria-current="location">{{$slug1}}</span></div>
            </li>
            @if(isset($slug2))
                <li class="crumb active">
                    <div class="link"><span aria-current="location">{{$slug2}}</span></div>
                </li>
            @endif
            
        </ol>
    </div>
</div>
<!--== End Page Header Area ==-->

<div class="job-detail-area sp-y-bottom">
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <div class="job-detail">
                        <p>
                            @php echo $job->short_content; @endphp
                        </p>
                        <h6> 
                            @php echo $job->long_content; @endphp 
                        </h6>
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="job-side-box">
                        <ul>
                            <li>
                                <h6>Company</h6>
                                <p>{{ $job->getJob->company_name }}</p>
                            </li>
                            <li>
                                <h6>Location</h6>
                                <p>{{ $job->getJob->country }} </p>
                            </li>
                            <li>
                                <h6>Offered Salary</h6>
                                <p>{{ $job->getJob->salary }}</p>
                            </li>
                            <li>
                                <h6>Gender</h6>
                                <p>{{ $job->getJob->gender }}</p>
                            </li>
                            <li>
                                <h6>Experience</h6>
                                <p>{{ $job->getJob->contract_time }}</p>
                            </li>
                            <li>
                                <h6>Qualification</h6>
                                <p>{{ $job->getJob->qualification }}</p>
                            </li>
                
                                <h6>Age range</h6>
                                <p>{{ $job->getJob->age_range }}</p>
                            </li>
                            <li>
                                <h6>Total Demand</h6>
                                <p>{{ $job->getJob->total_demand}}</p>
                            </li>
                        </ul>
                    </div>
                </div>


            </div>
        </div>
    </div>
@endsection
 