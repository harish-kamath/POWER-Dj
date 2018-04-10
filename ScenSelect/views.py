from django.shortcuts import render
from django.http import HttpResponse

from .models import User

def home(request):
    return HttpResponse('Hello!')
    # return render(request,'login.html')

def scenario_select(request):
    return render(request, 'ScenarioSelector.html')

def scenario_one(request):
    return render(request,'ScenarioOne.html')
