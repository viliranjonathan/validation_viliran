<!DOCTYPE html>
<html lang="en">
<body>
    <form action="{{  url('user_tasks') }}" method='POST'>
        <div>
            <label for="description">Description</label>
            <textarea id="description" name ="description" rows="5" style="width:100%"></textarea>
            @error('description')
            <div>{{ $message }}</div>
            @enderror
</div>
<div>
    <label for="deadline">Deadline</label>
    <input type="date" id="deadline" name="deadline" value="{{old('deadline') }}" />
    @error('deadline')
    <div>{{ $message }}</div>
    @enderror
</div>
<button type="submit">Submit</button>
</form>
</body>
</head>
