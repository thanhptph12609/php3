<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<form action="" method="get">
    <div>
        <label for="">Từ khóa</label>
        <input type="text" name="keyword" value="<?php echo e($searchData['keyword']); ?>" placeholder="Tìm theo tên sản phẩm">
    </div>
    <div>
        <label for="">Danh mục</label>
        <select name="cate_id" >
            <option value="">Tất cả</option>
            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option <?php if($item->id == $searchData['cate_id']): ?> selected <?php endif; ?> value="<?php echo e($item->id); ?>"><?php echo e($item->name); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
    </div>
    <div>
        <label for="">Tên cột</label>
        <select name="column_names" >
            <?php $__currentLoopData = $column_names; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option  <?php if($key == $searchData['column_names']): ?> selected <?php endif; ?> value="<?php echo e($key); ?>"><?php echo e($item); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
    </div>
    <div>
        <label for="">Sắp xếp theo</label>
        <select name="order_by" >
            <?php $__currentLoopData = $order_by; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option <?php if($key == $searchData['order_by']): ?> selected <?php endif; ?> value="<?php echo e($key); ?>"><?php echo e($item); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
    </div>
    <div>
        <button type="submit">Tìm kiếm</button>
    </div>
</form>
<table>
    <thead>
        <th>STT</th>
        <th>Name</th>
        <th>Price</th>
        <th>Category</th>
        <th>
            <a href="">Add new</a>
        </th>
    </thead>
    <tbody>
        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e(($products->currentPage() - 1)*$products->perPage() + $loop->iteration); ?></td>
                <td><?php echo e($item->name); ?></td>
                <td><?php echo e($item->price); ?></td>
                <td><?php echo e($item->cate_id); ?></td>
                <td>
                    <a href="">Edit</a>
                    <a href="<?php echo e(route('product.remove', ['id' => $item->id])); ?>">Remove</a>
                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td colspan="5">
                <?php echo e($products->onEachSide(1)->links()); ?>

            </td>
        </tr>
    </tbody>
</table><?php /**PATH E:\php3\bai1\resources\views/products/index.blade.php ENDPATH**/ ?>