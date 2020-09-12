<form action="#" class="appointment-form">
    <h3 class="mb-3">Book your Table</h3>
    <div class="row">
        <div class="{!! $class !!}">
            <div class="form-group">
                <input type="name" class="form-control" placeholder="Name">
            </div>
        </div>
        <div class="{!! $class !!}">
            <div class="form-group">
                <input type="email" class="form-control" placeholder="Email">
            </div>
        </div>
        <div class="{!! $class !!}">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Phone">
            </div>
        </div>
        <div class="{!! $class !!}">
            <div class="form-group">
                <div class="input-wrap">
                    <div class="icon"><span class="fa fa-calendar"></span></div>
                    <input type="text" class="form-control book_date" placeholder="Check-In">
                </div>
            </div>
        </div>
        <div class="{!! $class !!}">
            <div class="form-group">
                <div class="input-wrap">
                    <div class="icon"><span class="fa fa-clock-o"></span></div>
                    <input type="text" class="form-control book_time" placeholder="Time">
                </div>
            </div>
        </div>
        <div class="{!! $class !!}">
            <div class="form-group">
                <div class="form-field">
                    <div class="select-wrap">
                        <div class="icon"><span class="fa fa-chevron-down"></span></div>
                        <select name="" id="" class="form-control">
                            <option value="">Guest</option>
                            <option value="">1</option>
                            <option value="">2</option>
                            <option value="">3</option>
                            <option value="">4</option>
                            <option value="">5</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <div class="{!! $class !!}">
            <div class="form-group">
                <input type="submit" value="Book Your Table Now" class="btn btn-white py-3 px-4">
            </div>
        </div>
    </div>
</form>