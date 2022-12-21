<?php


namespace MojaHedi\Product\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class ProductSupplier
 *
 * @property int $id
 * @property int $product_id
 * @property int $supplier_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 *
 * @property Product $product
 * @property Supplier $supplier
 *
 * @package App\Models
 */
class ProductSupplier extends Model
{
	use SoftDeletes;
	protected $table = 'product_suppliers';

	protected $casts = [
		'product_id' => 'int',
		'supplier_id' => 'int'
	];

	protected $fillable = [
		'product_id',
		'supplier_id'
	];

	public function product()
	{
		return $this->belongsTo(Product::class);
	}

	public function supplier()
	{
		return $this->belongsTo(Supplier::class);
	}
}