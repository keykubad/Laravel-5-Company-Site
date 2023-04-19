@section('uyari')
    @if(Session::has('mesaj'))
<script type="text/javascript">
    $( document ).ready(function() {

Messenger.options = {
extraClasses: 'messenger-fixed messenger-on-top messenger-on-right',
theme: 'flat'
}

Messenger().post({
message: '{{ Session::get('mesaj') }}',
id: "Only-one-message",
type: '{{ Session::get('type') }}',
showCloseButton: true
});

});
    @endif
</script>
    @stop