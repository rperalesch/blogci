    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
               
                <?php
                
                foreach ($consulta->result() as $fila) {
                ?>
                <div class="post-preview">
                    <a href="<?php echo base_url()?>article/post/<?php echo $fila->id ?>">
                        <h2 class="post-title">
                            <?php echo $fila->post ?>
                        </h2>
                        <h3 class="post-subtitle">
                            <?php echo $fila->descripcion ?>
                        </h3>
                    </a>
                    <p class="post-meta">Posted by <a href="#">RPC </a> <?php echo $fila->fecha ?></p>
                </div>

                <?php
                }
                
                ?>

                
            </div>
        </div>
    </div>
