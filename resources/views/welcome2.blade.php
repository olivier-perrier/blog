@component('layouts.exmachina')

<x-slot name="sidebar">
    Sibar from view
</x-slot>

<div class="container">
    <div class="row">
        <div class="col-3">
            <section>
                <h2>Maecenas lectus</h2>
                <div class="balloon">
                    <blockquote>&ldquo;&nbsp;&nbsp;Donec leo, vivamus ullamcorper fermentum nibh in augue pulvinar ullamcorper metus praesent a lacus at urna congue ullamcorper rutrum.&nbsp;&nbsp;&rdquo;<br>
                        <br>
                        <strong>&ndash;&nbsp;&nbsp;John Smith</strong></blockquote>
                </div>
                <div class="ballon-bgbtm">&nbsp;</div>
            </section>
        </div>
        <div class="col-3">
            <section>
                <h2>Donec dictum</h2>
                <ul class="default">
                    <li>
                        <h3>Mauris vulputate dolor sit amet</h3>
                        <p><a href="#">Donec leo, vivamus fermentum nibh in augue praesent a lacus at urna congue rutrum.</a></p>
                    </li>
                    <li>
                        <h3>Fusce ultrices fringilla metus</h3>
                        <p><a href="#">Donec leo, vivamus fermentum nibh in augue praesent a lacus at urna congue rutrum.</a></p>
                    </li>
                    <li>
                        <h3>Donec dictum metus in sapien</h3>
                        <p><a href="#">Donec leo, vivamus fermentum nibh in augue praesent a lacus at urna congue rutrum.</a></p>
                    </li>
                </ul>
            </section>
        </div>
        <div class="col-3">
            <section>
                <h2>Nulla leifend</h2>
                <p>Donec placerat odio vel elit. Nullam ante orci, pellentesque eget, tempus quis, ultrices in, est. Curabitur sit amet nulla. Nam in massa. Sed vel tellus. Curabitur sem urna, consequat.</p>
                <ul class="style5">
                    <li><a href="#"><img src="exmachina/images/pics7.jpg" alt=""></a></li>
                    <li><a href="#"><img src="exmachina/images/pics8.jpg" alt=""></a></li>
                    <li><a href="#"><img src="exmachina/images/pics9.jpg" alt=""></a></li>
                    <li><a href="#"><img src="exmachina/images/pics10.jpg" alt=""></a></li>
                    <li><a href="#"><img src="exmachina/images/pics11.jpg" alt=""></a></li>
                    <li><a href="#"><img src="exmachina/images/pics12.jpg" alt=""></a></li>
                </ul>
                <a href="#" class="button">More Collections</a>
            </section>
        </div>
        <div class="col-3">
            <section>
                <h2>Luctus eleifend</h2>
                <p><strong>Aliquam erat volutpat. Pellentesque tristique ante ut risus. </strong></p>
                <p>Quisque dictum. Integer nisl risus, sagittis convallis, rutrum id, elementum congue, nibh. Suspendisse dictum porta lectus. Donec placerat odio vel elit.</p>
                <p>Donec placerat odio vel elit. Nullam ante orci, pellentesque eget, tempus quis, ultrices in, est. Curabitur sit amet nulla. Nam in massa. Sed vel tellus. Curabitur sem urna, consequat.</p>
                <a href="#" class="button">More Collections</a>
            </section>
        </div>
    </div>
</div>


@endcomponent