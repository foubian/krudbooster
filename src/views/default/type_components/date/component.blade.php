<div class='form-group form-datepicker {{ $header_group_class }} {{ $errors->first($name) ? 'has-error' : '' }}'
    id='form-group-{{ $name }}' style="{{ @$form['style'] }}">
    <label class='control-label col-sm-2'>{{ $form['label'] }}
        @if ($required)
            <span class='text-danger' title='{!! cbLang('this_field_is_required') !!}'>*</span>
        @endif
    </label>
    <div class="{{ $col_width ?: 'col-sm-10' }}">

        @if ($readonly)
            <label class=control-label col-sm-2'>
                <a class="'pull-left btn btn-xs spin-icon outline btn-{{ $value == '' ? 'danger' : 'navy' }}"><i class="fa-solid fa-keyboard"></i>
                    {{ $value == '' ? 'Non saisie' : $value }}</a>
            </label>
        @else
            <div class="input-group">
                <span class="input-group-addon open-datetimepicker">
                    <a>
                        <i class="fa-solid fa-calendar-days" style="color: {{ @$form['color'] }};"></i>
                    </a>
                </span>
                <input type='text' title="{{ $form['label'] }}"  {{ $required }} {{ $readonly }}
                    {!! $placeholder !!} {{ $disabled }} class='form-control notfocus input_date'
                    name="{{ $name }}" id="{{ $name }}" value='{{ $value }}' />
            </div>
            <div class="text-danger">{!! $errors->first($name) ? "<i class='fa fa-info-circle'></i> " . $errors->first($name) : '' !!}</div>
            <p class='help-block'>{{ @$form['help'] }}</p>
        @endif
    </div>

</div>
