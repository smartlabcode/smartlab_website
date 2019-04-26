<div class="form-group">
    <label for="language">Blog language</label>
    <select class="form-control" name="language" id="language">
        <option value="en" @if(isset($language) && $language == 'en') selected @endif>English</option>
        <option value="de" @if(isset($language) && $language == 'de') selected @endif>German</option>
        <option value="bs" @if(isset($language) && $language == 'bs') selected @endif>Bosnian</option>
    </select>
</div>