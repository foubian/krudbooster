@push('head')
<style>

.tgl {
  display: none;
}

.tgl + .tgl-btn {
  outline: 0;
  display: block;
  width: 4em;
  height: 2em;
  position: relative;
  cursor: pointer;
  -webkit-user-select: none;
     -moz-user-select: none;
      -ms-user-select: none;
          user-select: none;
}
.tgl + .tgl-btn:after, .tgl + .tgl-btn:before {
  position: relative;
  display: block;
  content: "";
  width: 50%;
  height: 100%;
}
.tgl + .tgl-btn:after {
  left: 0;
}
.tgl + .tgl-btn:before {
  display: none;
}
.tgl:checked + .tgl-btn:after {
  left: 50%;
}

.tgl-flip + .tgl-btn {
  padding: 2px;
  transition: all 0.2s ease;
  font-family: sans-serif;
  perspective: 100px;
}
.tgl-flip + .tgl-btn:after, .tgl-flip + .tgl-btn:before {
  display: inline-block;
  transition: all 0.4s ease;
  width: 100%;
  text-align: center;
  position: absolute;
  line-height: 2em;
  font-weight: bold;
  color: #fff;
  position: absolute;
  top: 0;
  left: 0;
  -webkit-backface-visibility: hidden;
          backface-visibility: hidden;
  border-radius: 4px;
}
.tgl-flip + .tgl-btn:after {
  content: attr(data-tg-on);
  background: #02C66F;
  transform: rotateY(-180deg);
}
.tgl-flip + .tgl-btn:before {
  background: #FF3A19;
  content: attr(data-tg-off);
}
.tgl-flip + .tgl-btn:active:before {
  transform: rotateY(-20deg);
}
.tgl-flip:checked + .tgl-btn:before {
  transform: rotateY(180deg);
}
.tgl-flip:checked + .tgl-btn:after {
  transform: rotateY(0);
  left: 0;
  background: LimeGreen;
}
.tgl-flip:checked + .tgl-btn:active:after {
  transform: rotateY(20deg);
}
  </style>

@endpush