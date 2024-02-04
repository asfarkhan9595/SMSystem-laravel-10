
@if (session('success'))
<div class="alert alert-success" id="successAlert">
    {{ session('success') }}
</div>
<script>
    setTimeout(function(){
        document.getElementById('successAlert').style.display = 'none';
    }, 2000); // 2000 milliseconds (2 seconds)
</script>
@endif

@if (session('error'))
<div class="alert alert-danger" id="errorAlert">
    {{ session('error') }}
</div>
<script>
    setTimeout(function(){
        document.getElementById('errorAlert').style.display = 'none';
    }, 5000); // 5000 milliseconds (5 seconds)
</script>
@endif