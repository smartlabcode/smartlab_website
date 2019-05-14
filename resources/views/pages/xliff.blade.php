@extends('layouts.app')

@section('content')

    <h2>Extract terms to translate from XLF file</h2>
    <form action="http://xlfconvertor:8888/exporter" method="post" enctype="multipart/form-data">

{{--        @csrf--}}

        <label for="file">Choose XLF file for extracting terms: </label>
        <input id="file" type="file" name="file" accept=".xlf" required />

        <br/>
        <br/>

        <p>Choose language column/s for which you want to set translations</p>
        <select id="multiselect" name="languages[]" size="11" multiple required>
            <option value="en">English</option>
            <option value="de">German</option>
            <option value="it">Italian</option>
            <option value="fr">French</option>
            <option value="es">Spanish</option>
            <option value="cs">Czech</option>
            <option value="zh">Chinese</option>
            <option value="pt">Portugal</option>
            <option value="pl">Poland</option>
            <option value="ru">Russian</option>
            <option value="nl">Netherlands</option>
        </select>

        <br/>
        <br/>

        <input type="submit" value="Export"/>
    </form>

@endsection