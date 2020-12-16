@extends('master_invoice')

<!-- Finding the user and the package -->
@php
  $client = App\User::find($invoice_alias->user_id);
  $category = App\Category::find($invoice_alias->category_id);
@endphp
<!-- End -->

@section('user_name',$client->name)

@section('user_phone',$client->phone)

@section('user_email',$client->email)

@section('invoice_number',$invoice_alias->id)

@section('package_name',$category->package->name)

@section('category_name',$category->name)

@section('category_price',$category->price)

<!-- Needs Refactoring -->
@section('invoice_date',$invoice_alias->updated_at->toDayDateTimeString())

@section('invoice_duration')

@section('category_price_2',$invoice_alias->total)

@section('print_button')

 <a style="font-size:20px; float:right;" href = "{{route('insurer.list.invoice') }}">Back</a>

@endsection
