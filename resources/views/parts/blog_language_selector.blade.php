<!-- Language select element for blog pages -->
<div class="form-group">
    <label for="language">Blog language</label>
    <!-- Set option as disabled if admin is editing or adding new translation to existing blog -->
    <select class="form-control" name="language" id="language" @if($type=='edit' || $type=='add-edit' ) disabled @endif>
        <!-- Check if language is set and which is selected to mark right option as selected -->
        <option value="en" @if(isset($language) && $language=='en' ) selected @endif>English</option>
        <option value="de" @if(isset($language) && $language=='de' ) selected @endif>German</option>
        <option value="bs" @if(isset($language) && $language=='bs' ) selected @endif>Bosnian</option>
    </select>
</div>