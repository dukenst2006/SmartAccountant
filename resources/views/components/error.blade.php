@props(['name'=>'name'])


@error("$name")
<div class="alert alert-danger mt-1" style="width: 100%">
    {{$message}}
</div>
@enderror