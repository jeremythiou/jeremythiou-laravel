<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formation extends Model
{
    use HasFactory;

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function getDateRangeFormattedAttribute() {
        $string = Carbon::parse($this->from)->formatLocalized('%b %Y');

        $string .= ' - ' . ($this->to ? Carbon::parse($this->to)->formatLocalized('%b %Y') : "Aujourd'hui");

        return $string;
    }

    public function scopeVisible(Builder $query) {
        return $query->where('display', true);
    }
}
