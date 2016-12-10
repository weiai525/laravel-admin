<div class="input-group input-group-sm">
    <span class="input-group-addon"><strong>{{$label}}</strong></span>
    <?php $name = $field->name(); ?>
    @include('admin::filter.' . $name)
</div>
