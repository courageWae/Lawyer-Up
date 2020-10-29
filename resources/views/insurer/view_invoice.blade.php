@extends('master_invoice')

<!-- Finding the user and the package -->
@php($client = App\User::find($clientInvoice->user_id))
@php($category = App\Category::find($clientInvoice->category_id))
<!-- End -->

@section('user_name',$client->name)

@section('user_phone',$client->phone)

@section('user_email',$client->email)

@section('invoice_number',$clientInvoice->id)

@section('package_name',$category->package->name)

@section('category_name',$category->name)

@section('category_price',$category->price)

@section('invoice_date',$clientInvoice->updated_at->toDayDateTimeString())

@section('invoice_duration')

@section('category_price_2',$clientInvoice->total)

@section('print_button')

 <a style="font-size:20px; float:right;" href = "{{route('insurer.list.invoice') }}">Back</a>

@endsection
