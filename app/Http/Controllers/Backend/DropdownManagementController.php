<?php

namespace App\Http\Controllers\Backend;

use App\BTSolutions;
use App\Competitor;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Lob;
use App\Maintenance;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class DropdownManagementController extends Controller
{
    function index()
    {
        $lobs = Lob::all();
        $pbx = BTSolutions::all();
        $competitor = Competitor::all();
        $maintenance = Maintenance::all();
        return view('backend.dropdowns.index', compact('lobs', 'pbx', 'competitor', 'maintenance'));
    }

    function create()
    {
        return view('backend.dropdowns.create');
    }

    function store(Request $request)
    {
        $input = $request->all();
        $value = array_get($input, 'table');

        if ($value == 'lob') {
            $this->validate($request, [
                'selection' => 'required'
            ]);
            Lob::create($input);
            return redirect('admin/dropdown_management')->withFlashSuccess('The Selection was successfully added.');
        } elseif ($value == 'bt_solution') {
            $this->validate($request, [
                'selection' => 'required'
            ]);
            BTSolutions::create($input);
            return redirect('admin/dropdown_management')->withFlashSuccess('The Selection was successfully added.');
        } elseif ($value == 'maintenance') {
            $this->validate($request, [
                'selection' => 'required'
            ]);
            Maintenance::create($input);
            return redirect('admin/dropdown_management')->withFlashSuccess('The Selection was successfully added.');
        } elseif ($value == 'competitor') {
            $this->validate($request, [
                'selection' => 'required'
            ]);
            Competitor::create($input);
            return redirect('admin/dropdown_management')->withFlashSuccess('The Selection was successfully added.');
        }
    }

    function update(Request $request, $id)
    {
        if(strpos($id,'lob')!== FALSE)
        {
            $id = str_replace("lob","",$id);
            $lob = Lob::findOrFail($id);

            $this->validate($request, [
                'selection' => 'required'
            ]);
            $input = $request->all();
            $lob->fill($input)->save();
            return redirect('admin/dropdown_management')->withFlashSuccess('The Selection was successfully altered.');
        }
        elseif(strpos($id,'bt_solution')!== FALSE)
        {
            $id = str_replace("bt_solution","",$id);
            $bt_solution = BTSolutions::findOrFail($id);

            $this->validate($request, [
                'selection' => 'required'
            ]);
            $input = $request->all();
            $bt_solution->fill($input)->save();
            return redirect('admin/dropdown_management')->withFlashSuccess('The Selection was successfully altered.');
        }
        elseif(strpos($id,'maintenance')!== FALSE)
        {
            $id = str_replace("maintenance","",$id);
            $maintenance = Maintenance::findOrFail($id);

            $this->validate($request, [
                'selection' => 'required'
            ]);
            $input = $request->all();
            $maintenance->fill($input)->save();
            return redirect('admin/dropdown_management')->withFlashSuccess('The Selection was successfully altered.');
        }
        elseif(strpos($id,'competitor')!== FALSE)
        {
            $id = str_replace("competitor","",$id);
            $competitor = Competitor::findOrFail($id);
            $this->validate($request, [
                'selection' => 'required'
            ]);
            $input = $request->all();
            $competitor->fill($input)->save();
            return redirect('admin/dropdown_management')->withFlashSuccess('The Selection was successfully altered.');
        }
    }

    function edit($id)
    {
        if(strpos($id,'lob')!== FALSE)
        {
            $id = str_replace("lob","",$id);
            $lob = Lob::findOrFail($id);
            return view('backend.dropdowns.edit_lob', compact('lob'));
        }
        elseif(strpos($id,'bt_solution')!== FALSE)
        {
            $id = str_replace("bt_solution","",$id);
            $bt_solution = BTSolutions::findOrFail($id);
            //return $product;
            return view('backend.dropdowns.edit_bt_solution', compact('bt_solution'));
        }
        elseif(strpos($id,'maintenance')!== FALSE)
        {
            $id = str_replace("maintenance","",$id);
            $maintenance = Maintenance::findOrFail($id);
            return view('backend.dropdowns.edit_maintenance', compact('maintenance'));
        }
        elseif(strpos($id,'competitor')!== FALSE)
        {
            $id = str_replace("competitor","",$id);
            $competitor = Competitor::findOrFail($id);
            return view('backend.dropdowns.edit_competitor', compact('competitor'));
        }
    }

    function destroy($id)
    {
        if(strpos($id,'lob')!== FALSE)
        {
            $id = str_replace("lob","",$id);
            $lob = Lob::findOrFail($id);
            $lob->delete();
            return redirect('admin/dropdown_management')->withFlashSuccess('The Selection was successfully deleted.');
        }
        elseif(strpos($id,'bt_solution')!== FALSE)
        {
            $id = str_replace("bt_solution","",$id);
            $product = BTSolutions::findOrFail($id);
            $product->delete();
            return redirect('admin/dropdown_management')->withFlashSuccess('The Selection was successfully deleted.');
        }
        elseif(strpos($id,'maintenance')!== FALSE)
        {
            $id = str_replace("maintenance","",$id);
            $maintenance = Maintenance::findOrFail($id);
            $maintenance->delete();
            return redirect('admin/dropdown_management')->withFlashSuccess('The Selection was successfully deleted.');
        }
        elseif(strpos($id,'competitor')!== FALSE)
        {
            $id = str_replace("competitor","",$id);
            $competitor = Competitor::findOrFail($id);
            $competitor->delete();
            return redirect('admin/dropdown_management')->withFlashSuccess('The Selection was successfully deleted.');
        }
    }
}
