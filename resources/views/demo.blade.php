@extends('layouts.app')

@section('content')

    <div class="container-fluid">
        <form action="{{ url('/search') }}" method="GET" id="form_search">
            <input class="typeahead form-control" name="query" type="text" data-provide="typeahead" id="typeahead" autocomplete="off">
        </form>
    </div>



    <script type="text/javascript">
        var path = "{{ url('demo/search') }}";
        $('input.typeahead').typeahead({
            header: 'Your Events',

            source: function(query, process) {

                return $.getJSON(path, {
                    query: query
                }, function(data) {
                    process(data);
                });
            },
            displayText: function(item) {
                return '<div class="bg-light"><h2>' + item.first_name + ' ' + item.other_name + '</h2>  <p>' +
                    item.area_of_interest + '</p>  </div>';
            },
            highlighter: function(item) {
                return ('<div class="p-4 rounded m-4">' + item + '</div>');
            },
            matcher: function(item) {
                if (item.first_name.toLowerCase().indexOf(this.query.trim().toLowerCase()) != -1) {
                    return true;
                }
            },
            sorter: function(items) {
                return items; //items.sort();
            },
            afterSelect: function(item) {

                this.$element[0].value = item.area_of_interest;
                console.log(item.first_name);
                $('#form_search').submit();
            },
            items: 20,
            minLength: 1,
            matcher: function(item) {
                return item;
            },
            // updater: function(item) {
            //     var hidden_id = this.$element.attr('data-hidden');
            //     $(hidden_id).val(Mapped[item]);
            //     return item;
            // },
            // templates: {
            //     suggestion: function(data) {
            //         return '<a class="text-danger bg-primary" href="" role="option"><strong >' + data.itemName +
            //             '</strong> - <img height:"50px" width:"50px" src=' +
            //             data.imageUrl + '></a>';
            //     }
            // }
        });
    </script>

@endsection
