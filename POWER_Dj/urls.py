from django.conf.urls import url
from django.contrib import admin
from django.contrib.auth import views as auth_views
from django.conf.urls import include

from ScenSelect import views

urlpatterns = [
    url(r'^admin/', admin.site.urls),
#    url(r'^$', views.home, name='loginForm'),
    url(r'accounts/', include('django.contrib.auth.urls')),
    url(r'^$', views.scenario_select, name='scen_select'),
    url(r'scenarios/',views.scenario_one,name='scen_one')
]
