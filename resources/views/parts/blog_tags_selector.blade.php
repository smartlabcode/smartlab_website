<!-- Tags multiple select element -->
<div class="form-group">
    <label for="tags">Select blog tags: </label>
    <!-- Check is option should be disabled -->
    <select multiple="multiple" class="form-control" name="tags[]" id="tags" @if($type == 'add-edit' && !empty($tags)) disabled @endif>

        <!-- Check if there is selected tags and if yes mark corresponding elements as selected-->
        @if(!empty($tags))

            <option value="development" @if(in_array('development', $tags)) selected @endif>Development</option>
            <option value="onlinecourses" @if(in_array('onlinecourses', $tags)) selected @endif>Online courses</option>
            <option value="educational" @if(in_array('educational', $tags)) selected @endif>Educational</option>
            <option value="moodle" @if(in_array('moodle', $tags)) selected @endif>Moodle</option>

        <!-- If there is no tags set usual multiple select element -->
        @else

            <option value="development">Development</option>
            <option value="onlinecourses">Online courses</option>
            <option value="educational">Educational</option>
            <option value="moodle">Moodle</option>

        @endif

    </select>
</div>