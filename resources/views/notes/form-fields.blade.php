<label>
    Title
    <br>
    <input name="title" type="text" value="{{old('title', $note->title)}}">
    @error('title')
        <br>
        <small style="color: red">{{ $message }}</small>
    @enderror
</label>
<br>
<label>
    Description
    <br>
    <textarea name="description">{{old('description', $note->description)}}</textarea>
    @error('description')
        <br>
        <small style="color: red">{{ $message }}</small>
    @enderror
</label>
<br>