@extends('layouts.people.app')

@section('content')
<div class="flex-column container mt-3">
    <div class="row">
        <div class="card shadow col-md-12 col-lg-12 col-sm-12 col-xs-12">
            <form action="#">
                <div class="card-header border-0">
                    <div class="row align-items-center">
                        <div class="col">
                            <h3 class="mb-0 text-center">{{__('Personal Information')}}</h3>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-9 mx-auto px-5">
                            <div class="form-group">
                                <label class="font-weight-bold"> {{ __('Document Type')}} <span class="text-danger">*</span></label>
                                <select name="DocumentTypeID" id="DocumentTypeID" class="form-control" required">
                                    <option value>- {{__('Select')}} -</option>
                                     <option value="1">{{__('Citizenship card')}}</option>
                                     <option value="2">{{__('Foreigner ID')}}</option>
                                     <option value="3">{{__('Passport')}}</option>
                                     <option value="4">{{__('Identification number')}}</option>
                                     <option value="5">{{__('Identity card')}}</option>
                                     <option value="6">{{__('Civil registration')}}</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold"> {{ __('Document Number')}} <span class="text-danger">*</span></label>
                                <input type="text" name="documentNumber" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold"> {{ __('First Name')}} <span class="text-danger">*</span></label>
                                <input type="text" name="firstName" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold"> {{ __('Last Name')}} <span class="text-danger">*</span></label>
                                <input type="text" name="lastName" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold"> {{ __('Gender')}} <span class="text-danger">*</span></label>
                                <select name="gender" id="gender" class="form-control" required>
                                    <option value>- {{__('Select')}} -</option>
                                    <option value="1">{{__('Male')}}</option>
                                    <option value="2">{{__('Female')}}</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold"> {{ __('Civil Status')}} <span class="text-danger">*</span></label>
                                <select name="gender" id="gender" class="form-control" required>
                                    <option value>- {{__('Select')}} -</option>
                                    <option value="1">{{__('Single')}}</option>
                                    <option value="2">{{__('Married')}}</option>
                                    <option value="3">{{__('Divorced')}}</option>
                                    <option value="4">{{__('Free Union')}}</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold"> {{ __('Profession')}} <span class="text-danger">*</span></label>
                                <input type="text" name="profession" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold"> {{ __('Professional profile')}} <span class="text-danger">*</span></label>
                                <textarea style="resize: none;" name="profession" id="profession" cols="101" rows="2" aria-valuemax="1200"></textarea>
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold"> {{ __('Date of birth')}} <span class="text-danger">*</span></label>
                                <div>
                                    <div class="input-daterange input-group" id="datepicker">
                                        <input type="number" name="day" min="1" max="31" class="form-control" placeholder="Dia" required>
                                        <span class="mx-2"> . </span>
                                        <select name="month" id="month" class="form-control" required>
                                            <option value="">- Mes -</option>
                                            <option value="1">Enero</option>
                                            <option value="2">Febrero</option>
                                            <option value="3">Marzo</option>
                                            <option value="4">Abril</option>
                                            <option value="5">Mayo</option>
                                            <option value="6">Junio</option>
                                            <option value="7">Julio</option>
                                            <option value="8">Agosto</option>
                                            <option value="9">Septiembre</option>
                                            <option value="10">Octubre</option>
                                            <option value="11">Noviembre</option>
                                            <option value="12">Diciembre</option>
                                        </select>
                                        <span class="mx-2"> . </span>
                                        <select name="year" id="year" class="form-control" required>
                                            <option value="">- Año -</option>
                                            <option value="2021" >2021</option>
                                            <option value="2020" >2020</option>
                                            <option value="2019" >2019</option>
                                            <option value="2018" >2018</option>
                                            <option value="2017" >2017</option>
                                            <option value="2016" >2016</option>
                                            <option value="2015" >2015</option>
                                            <option value="2014" >2014</option>
                                            <option value="2013" >2013</option>
                                            <option value="2012" >2012</option>
                                            <option value="2011" >2011</option>
                                            <option value="2010" >2010</option>
                                            <option value="2009" >2009</option>
                                            <option value="2008" >2008</option>
                                            <option value="2007" >2007</option>
                                            <option value="2006" >2006</option>
                                            <option value="2005" >2005</option>
                                            <option value="2004" >2004</option>
                                            <option value="2003" >2003</option>
                                            <option value="2002" >2002</option>
                                            <option value="2001" >2001</option>
                                            <option value="2000" >2000</option>
                                            <option value="1999" >1999</option>
                                            <option value="1998" >1998</option>
                                            <option value="1997" >1997</option>
                                            <option value="1996" >1996</option>
                                            <option value="1995" >1995</option>
                                            <option value="1994" >1994</option>
                                            <option value="1993" >1993</option>
                                            <option value="1992" >1992</option>
                                            <option value="1991" >1991</option>
                                            <option value="1990" >1990</option>
                                            <option value="1989" >1989</option>
                                            <option value="1988" >1988</option>
                                            <option value="1987" >1987</option>
                                            <option value="1986" >1986</option>
                                            <option value="1985" >1985</option>
                                            <option value="1984" >1984</option>
                                            <option value="1983" >1983</option>
                                            <option value="1982" >1982</option>
                                            <option value="1981" >1981</option>
                                            <option value="1980" >1980</option>
                                            <option value="1979" >1979</option>
                                            <option value="1978" >1978</option>
                                            <option value="1977" >1977</option>
                                            <option value="1976" >1976</option>
                                            <option value="1975" >1975</option>
                                            <option value="1974" >1974</option>
                                            <option value="1973" >1973</option>
                                            <option value="1972" >1972</option>
                                            <option value="1971" >1971</option>
                                            <option value="1970" >1970</option>
                                            <option value="1969" >1969</option>
                                            <option value="1968" >1968</option>
                                            <option value="1967" >1967</option>
                                            <option value="1966" >1966</option>
                                            <option value="1965" >1965</option>
                                            <option value="1964" >1964</option>
                                            <option value="1963" >1963</option>
                                            <option value="1962" >1962</option>
                                            <option value="1961" >1961</option>
                                            <option value="1960" >1960</option>
                                            <option value="1959" >1959</option>
                                            <option value="1958" >1958</option>
                                            <option value="1957" >1957</option>
                                            <option value="1956" >1956</option>
                                            <option value="1955" >1955</option>
                                            <option value="1954" >1954</option>
                                            <option value="1953" >1953</option>
                                            <option value="1952" >1952</option>
                                            <option value="1951" >1951</option>
                                            <option value="1950" >1950</option>
                                            <option value="1949" >1949</option>
                                            <option value="1948" >1948</option>
                                            <option value="1947" >1947</option>
                                            <option value="1946" >1946</option>
                                            <option value="1945" >1945</option>
                                            <option value="1944" >1944</option>
                                            <option value="1943" >1943</option>
                                            <option value="1942" >1942</option>
                                            <option value="1941" >1941</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold"> {{ __('Email')}} <span class="text-danger">*</span></label>
                                <input type="text" name="email" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold"> {{ __('Address')}} <span class="text-danger">*</span></label>
                                <input type="text" name="address" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold"> {{ __('Phone')}} <span class="text-danger">*</span></label>
                                <input type="text" name="profession" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold"> {{ __('CellPhone')}} <span class="text-danger">*</span></label>
                                <input type="text" name="cellPhone" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold"> {{ __('Country')}} <span class="text-danger">*</span></label>
                                <select class="form-control" id="countryId" name="countryId">
                                    <option value="">- Seleccionar -</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold"> {{ __('Deparment')}} <span class="text-danger">*</span></label>
                                <select class="form-control" id="departamentId" name="departamentId">
                                    <option value="">- Seleccionar -</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold"> {{ __('City')}} <span class="text-danger">*</span></label>
                                <select class="form-control" id="cityId" name="cityId">
                                    <option value="">- Seleccionar -</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold"> {{ __('Wage aspiration')}} <span class="text-danger">*</span></label>
                                <select name="wageAspiration" id="gender" class="form-control" required>
                                    <option value="">- Seleccionar -</option>
                                    <option value="1">Menos de $ 1 mm.</option>
                                    <option value="2">De $1 a 1.5 mm.</option>
                                    <option value="3">De $1.5 a 2 mm.</option>
                                    <option value="4">De $2 a 2.5 mm.</option>
                                    <option value="5">De $2.5 a 3 mm.</option>
                                    <option value="6">De $3 a 3.5 mm.</option>
                                    <option value="7">De $3.5 a 4 mm.</option>
                                    <option value="8">De $4 a 5 mm.</option>
                                    <option value="9">De $5 a 7 mm.</option>
                                    <option value="10">De $7 a 9 mm.</option>
                                    <option value="11">De $9 a 11 mm.</option>
                                    <option value="12">De $11 a 15 mm.</option>
                                    <option value="13">De $15 a 20 mm.</option>
                                    <option value="14">Mas de $20 mm.</option>
                                </select>
                            </div>
                            <div class="row mt-4">
                                <div class="col-2">
                                    <button type="submit" class="btn btn-primary">{{__('Save')}}</button>
                                </div>
                                <div class="col-2">
                                    <a class="btn btn-danger" type="button" href="{{ route('dashboard') }}">{{ __('Cancel') }}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </form>
        </div>
        {{-- <x-card class="m-3 pn-2 col-md-5 col-12" title="Carta 1">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum rerum sunt iste nulla inventore,
            ducimus provident. Nesciunt, vel quis iusto ipsam ex itaque provident animi architecto omnis fuga voluptates qui?
            <x-slot name="link">
                <a href="{{ route('profile.edit') }}" class="btn btn-primary">Go somewhere</a>
            </x-slot>
        </x-card>
        <x-card class="m-3 pn-2 col-md-5 col-12" title="Carta 2">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum rerum sunt iste nulla inventore,
            ducimus provident. Nesciunt, vel quis iusto ipsam ex itaque provident animi architecto omnis fuga voluptates qui?
            <x-slot name="link">
                <a href="{{ route('profile.edit') }}" class="btn btn-primary">Go somewhere</a>
            </x-slot>
        </x-card> --}}
    </div>
</div>
@endsection