<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\FingerDevices\StoreRequest;
use App\Http\Requests\FingerDevices\UpdateRequest;
use App\Helpers\FingerHelper;
use App\Models\FingerDevices;
use App\Models\Personnel;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;


class BiometricDeviceController extends Controller
{
    //
    public function index()
    {
        $devices = FingerDevices::all();

        return view('fingersDevices.index', compact('devices'));
    }


    public function create()
    {
        return view('fingersDevices.create');
    }

    public function store(StoreRequest $request): RedirectResponse
    {
        $helper = new FingerHelper();

        $device = $helper->init($request->input('ip'));

        if ($device->connect()) {
            // Serial Number Sample CDQ9192960002\x00

            $serial = $helper->getSerial($device);

            FingerDevices::create($request->validated() + ['serialNumber' => $serial]);

        } else {
        }

        return redirect()->route('finger_device.index');
    }

    public function show(FingerDevices $fingerDevice)
    {
        return view('fingerDevices.show', compact('fingerDevice'));
    }

    public function edit(FingerDevices $fingerDevice)
    {
        return view('fingerDevices.edit', compact('fingerDevice'));
    }

    public function update(UpdateRequest $request, FingerDevices $fingerDevice): RedirectResponse
    {
        $fingerDevice->update($request->validated());


        return redirect()->route('finger_device.index');
    }

    public function destroy(FingerDevices $fingerDevice): RedirectResponse
    {
        try {
            $fingerDevice->delete();
        } catch (\Exception $e) {
            toast("Failed to delete {$fingerDevice->name}", 'error');
        }


        return back();
    }

    public function addPersonnel(FingerDevices $fingerDevice): RedirectResponse
    {
        $device = new ZKLibrary($fingerDevice->ip, 4370);

        $device->connect();

        $deviceUsers = collect($device->getUser())->pluck('uid');

        $personnel = Personnel::select('name', 'id')
            ->whereNotIn('id', $deviceUsers)
            ->get();

        $i = 1;

        foreach ($personnel as $person) {
            $device->setUser($i++, $person->id, $person->name, '', '0', '0');
        }

        return back();
    }


}
