@extends("emails.site.layout")
@section("email_content")
    Hi {{ $name }},
    <br/><br/>
    <b>{{ $company->company_name }}</b> has changed the plan to <b>{{ $company->subscriptionPlan->plan_name }} ({{ ucwords($company->package_type) }})</b>:<br/><br/>

    <br/><br/>
@endsection
