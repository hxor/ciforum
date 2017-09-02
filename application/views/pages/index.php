        <div class="container">

            <!-- Page-Title -->
            <div class="row">
                <div class="card-box">
                    <h3 class="list-group-item-heading">Selamat Datang di</h3>
                    <h2>Forum Pecinta Hewan</h2>
                </div>
            </div>

            <div class="row">
                <div class="card-box">
                    <div class="panel panel-color panel-inverse">
                        <div class="panel-heading">
                            <h3 class="panel-title">Forum Stats</h3>
                        </div>
                        <div class="panel-body">
                            <div class="col-sm-8">
                                <table class="table table-striped m-0">
                                    <thead>
                                        <tr>
                                            <th>Topic</th>
                                            <th>Date</th>
                                            <th>Author</th>
                                            <th>Forum</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <p>
                                                    Berisi peraturan-peraturan...
                                                </p>
                                            </td>
                                            <td>
                                                <p>02:20:21</p>
                                            </td>
                                            <td>
                                                dracOslinux
                                            </td>
                                            <td>
                                                Ternak Lele
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p>
                                                    Berisi peraturan-peraturan...
                                                </p>
                                            </td>
                                            <td>
                                                <p>02:20:21</p>
                                            </td>
                                            <td>
                                                dracOslinux
                                            </td>
                                            <td>
                                                Ternak Lele
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p>
                                                    Berisi peraturan-peraturan...
                                                </p>
                                            </td>
                                            <td>
                                                <p>02:20:21</p>
                                            </td>
                                            <td>
                                                dracOslinux
                                            </td>
                                            <td>
                                                Ternak Lele
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-sm-4">
                                <table class="table m-0">
                                    <thead>
                                        <tr>
                                            <th>Popular Post</th>
                                            <th>Comments</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Mark</td>
                                            <td>2200</td>
                                        </tr>
                                        <tr>
                                            <td>Jacob</td>
                                            <td>1300</td>
                                        </tr>
                                        <tr>
                                            <td>Larry</td>
                                            <td>500</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <div class="panel panel-color panel-inverse">
                        <div class="panel-heading">
                            <h3 class="panel-title"><?= ucwords($general_forum->category) ?></h3>
                        </div>
                        <div class="panel-body">
                            <table class="table table-striped m-0">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Room</th>
                                        <th>Topics</th>
                                        <th>Last Post</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>
                                            <a href="room.html"><b>Rulles And FAQ</b></a>
                                            <p>
                                                Berisi peraturan-peraturan mendasar beserta cara-cara menggunakan forum ini
                                            </p>
                                        </td>
                                        <td>9</td>
                                        <td>
                                            Yesterday 02:20:21
                                            <p>by dracOslinux</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>
                                            <b>Rulles And FAQ</b>
                                            <p>
                                                Berisi peraturan-peraturan mendasar beserta cara-cara menggunakan forum ini
                                            </p>
                                        </td>
                                        <td>9</td>
                                        <td>
                                            Yesterday 02:20:21
                                            <p>by dracOslinux</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>
                                            <b>Rulles And FAQ</b>
                                            <p>
                                                Berisi peraturan-peraturan mendasar beserta cara-cara menggunakan forum ini
                                            </p>
                                        </td>
                                        <td>9</td>
                                        <td>
                                            Yesterday 02:20:21
                                            <p>by dracOslinux</p>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <?php foreach($forums as $forum): ?>
                        <div class="panel panel-color panel-inverse">
                            <div class="panel-heading">
                                <h3 class="panel-title"><?= ucwords($forum->category) ?></h3>
                            </div>
                            <div class="panel-body">
                                <table class="table table-striped m-0">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Room</th>
                                            <th>Topics</th>
                                            <th>Last Post</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>
                                                <a href="room.html"><b>Rulles And FAQ</b></a>
                                                <p>
                                                    Berisi peraturan-peraturan mendasar beserta cara-cara menggunakan forum ini
                                                </p>
                                            </td>
                                            <td>9</td>
                                            <td>
                                                Yesterday 02:20:21
                                                <p>by dracOslinux</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>
                                            <td>
                                                <b>Rulles And FAQ</b>
                                                <p>
                                                    Berisi peraturan-peraturan mendasar beserta cara-cara menggunakan forum ini
                                                </p>
                                            </td>
                                            <td>9</td>
                                            <td>
                                                Yesterday 02:20:21
                                                <p>by dracOslinux</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">3</th>
                                            <td>
                                                <b>Rulles And FAQ</b>
                                                <p>
                                                    Berisi peraturan-peraturan mendasar beserta cara-cara menggunakan forum ini
                                                </p>
                                            </td>
                                            <td>9</td>
                                            <td>
                                                Yesterday 02:20:21
                                                <p>by dracOslinux</p>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>

            <!-- Footer -->
            <footer class="footer text-right">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-6">
                            © 2017. All rights reserved.
                        </div>
                        <div class="col-xs-6">
                            <ul class="pull-right list-inline m-b-0">
                                <li>
                                    <a href="#">About</a>
                                </li>
                                <li>
                                    <a href="#">Help</a>
                                </li>
                                <li>
                                    <a href="#">Contact</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- End Footer -->

        </div>
        <!-- end container -->
