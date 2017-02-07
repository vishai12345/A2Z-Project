@extends('layouts.default')

@section('content')


    <div class="container">
        <div class="row">
            <div class="col-md-4">

                <form>
                    <div class="form-group">
                        <label for="tag_list">Tags:</label>
                        <select id="tag_list" name="tag_list" class="form-control" style="padding:10px" multiple></select>
                    </div>
                </form>

            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
    <script>
        $('#tag_list').select2({
            placeholder: "Choose Subject...",
            minimumInputLength: 1,
            ajax: {
                url: 'http://localhost/tutor_project/tags/find',
                dataType: 'json',
                data: function (params) {
                    return {
                        q: $.trim(params.term)
                    };
                },
                processResults: function (data) {
                    return {
                        results: data
                    };
                },
                cache: true
            }
        });
    </script>

@endsection