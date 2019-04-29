
<div class="form-group">
    <label for="tags">Select blog tags: </label>
    <select multiple="multiple" class="form-control" name="tags[]" id="tags" @if($type == 'add-edit' && !empty($tags)) disabled @endif>

        @if(!empty($tags))

            <option value="programming" @if(in_array('programming', $tags)) selected @endif>Programming</option>
            <option value="design" @if(in_array('design', $tags)) selected @endif>Design</option>
            <option value="video" @if(in_array('video', $tags)) selected @endif>Video</option>
            <option value="e-learning" @if(in_array('e-learning', $tags)) selected @endif>E-learning</option>

            @else

            <option value="programming">Programming</option>
            <option value="design">Design</option>
            <option value="video">Video</option>
            <option value="e-learning">E-learning</option>

        @endif

    </select>
</div>