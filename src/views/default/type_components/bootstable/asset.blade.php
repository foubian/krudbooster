@push('head')
    <link href="{{ asset('vendor/crudbooster/assets/bootstraptable/dist/bootstrap-table.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/crudbooster/assets/bootstraptable/dist/extensions/sticky-header/bootstrap-table-sticky-header.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/crudbooster/assets/bootstraptable/dist/extensions/filter-control/bootstrap-table-filter-control.css') }}" rel="stylesheet">

  @endpush

@push('bottom')
    <script>
        function headerStyle(column) {
            return {
                comname: {
                    css: {
                        background: 'DarkGray',
                    }
                },
                kayen: {
                    css: {
                        background: 'DarkGray',
                    }
                },
                titro: {
                    css: {
                        background: 'DarkGray',
                    }
                },

                name: {
                    css: {
                        background: 'DarkGray',
                        color: 'white'
                    }
                },

            } [column.field]
        };
        
    </script>
    <style>
        .icon-bar {
            position: fixed;
            top: 60%;
            
        }
        .switch {
            --line: GhostWhite;
            --dot: LimeGreen;
            --circle: LightCoral;
            --background: Gainsboro;
            --duration: .3s;
            --text: #9EA0BE;
            --shadow: 0 1px 3px rgba(0, 9, 61, 0.08);
            cursor: pointer;
            position: relative;
        }
        .switch:before {
            content: "";
            width: 60px;
            height: 32px;
            border-radius: 16px;
            background: var(--background);
            position: absolute;
            left: 0;
            top: 0;
            box-shadow: var(--shadow);
        }

        .switch input {
            display: none;
        }

        .switch input+div:before,
        .switch input+div:after {
            --s: 1;
            content: "";
            position: absolute;
            height: 4px;
            top: 14px;
            width: 24px;
            background: var(--line);
            transform: scaleX(var(--s));
            transition: transform var(--duration) ease;
        }

        .switch input+div:before {
            --s: 0;
            left: 4px;
            transform-origin: 0 50%;
            border-radius: 2px 0 0 2px;
        }

        .switch input+div:after {
            left: 32px;
            transform-origin: 100% 50%;
            border-radius: 0 2px 2px 0;
        }

        .switch input+div span {
            padding-left: 60px;
            line-height: 28px;
            color: var(--text);
        }

        .switch input+div span:before {
            --x: 0;
            --b: var(--circle);
            --s: 4px;
            content: "";
            position: absolute;
            left: 4px;
            top: 4px;
            width: 24px;
            height: 24px;
            border-radius: 50%;
            box-shadow: inset 0 0 0 var(--s) var(--b);
            transform: translateX(var(--x));
            transition: box-shadow var(--duration) ease, transform var(--duration) ease;
        }

        .switch input+div span:not(:empty) {
            padding-left: 68px;
        }

        .switch input:checked+div:before {
            --s: 1;
        }

        .switch input:checked+div:after {
            --s: 0;
        }

        .switch input:checked+div span:before {
            --x: 28px;
            --s: 12px;
            --b: var(--dot);
        }
    </style>
@endpush
